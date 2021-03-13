<?php

/*
 * This file is part of the Access to Memory (AtoM) software.
 *
 * Access to Memory (AtoM) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Access to Memory (AtoM) is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Access to Memory (AtoM).  If not, see <http://www.gnu.org/licenses/>.
 */

class QubitTaxonomy extends BaseTaxonomy
{
  public $disableNestedSetUpdating = false;

  const
    ROOT_ID = 30;
  const
    DESCRIPTION_DETAIL_LEVEL_ID = 31;
  const
    ACTOR_ENTITY_TYPE_ID = 32;
  const
    DESCRIPTION_STATUS_ID = 33;
  const
    LEVEL_OF_DESCRIPTION_ID = 34;
  const
    SUBJECT_ID = 35;
  const
    ACTOR_NAME_TYPE_ID = 36;
  const
    NOTE_TYPE_ID = 37;
  const
    REPOSITORY_TYPE_ID = 38;
  const
    EVENT_TYPE_ID = 40;
  const
    QUBIT_SETTING_LABEL_ID = 41;
  const
    PLACE_ID = 42;
  const
    FUNCTION_ID = 43;
  const
    HISTORICAL_EVENT_ID = 44;
  const
    COLLECTION_TYPE_ID = 45;
  const
    MEDIA_TYPE_ID = 46;
  const
    DIGITAL_OBJECT_USAGE_ID = 47;
  const
    PHYSICAL_OBJECT_TYPE_ID = 48;
  const
    RELATION_TYPE_ID = 49;
  const
    MATERIAL_TYPE_ID = 50;
  const
    // Rules for Archival Description (RAD) taxonomies
    RAD_NOTE_ID = 51;
  const
    RAD_TITLE_NOTE_ID = 52;
  const
    MODS_RESOURCE_TYPE_ID = 53;
  const
    DC_TYPE_ID = 54;
  const
    ACTOR_RELATION_TYPE_ID = 55;
  const
    RELATION_NOTE_TYPE_ID = 56;
  const
    TERM_RELATION_TYPE_ID = 57;
  const
    STATUS_TYPE_ID = 59;
  const
    PUBLICATION_STATUS_ID = 60;
  const
    ISDF_RELATION_TYPE_ID = 61;
  const
    // Accession taxonomies
    ACCESSION_RESOURCE_TYPE_ID = 62;
  const
    ACCESSION_ACQUISITION_TYPE_ID = 63;
  const
    ACCESSION_PROCESSING_PRIORITY_ID = 64;
  const
    ACCESSION_PROCESSING_STATUS_ID = 65;
  const
    DEACCESSION_SCOPE_ID = 66;
  const
    // Right taxonomies
    RIGHT_ACT_ID = 67;
  const
    RIGHT_BASIS_ID = 68;
  const
    COPYRIGHT_STATUS_ID = 69;
  const
    // Metadata templates
    INFORMATION_OBJECT_TEMPLATE_ID = 70;
  const
    // Metadata templates
    AIP_TYPE_ID = 71;
  const
    THEMATIC_AREA_ID = 72;
  const
    GEOGRAPHIC_SUBREGION_ID = 73;
  const
    // DACS notes
    DACS_NOTE_ID = 74;
  const
    // PREMIS Rights Statues
    RIGHTS_STATUTES_ID = 75;
  const
    // Genre taxonomy
    GENRE_ID = 78;
  const
    JOB_STATUS_ID = 79;
  const
    ACTOR_OCCUPATION_ID = 80;
  const
    USER_ACTION_ID = 81;
  const
    ACCESSION_ALTERNATIVE_IDENTIFIER_TYPE_ID = 82;
  const
    ACCESSION_EVENT_TYPE_ID = 83;

  public static
    $lockedTaxonomies = array(
      self::QUBIT_SETTING_LABEL_ID,
      self::COLLECTION_TYPE_ID,
      self::DIGITAL_OBJECT_USAGE_ID,
      self::MEDIA_TYPE_ID,
      self::RELATION_TYPE_ID,
      self::RELATION_NOTE_TYPE_ID,
      self::TERM_RELATION_TYPE_ID,
      self::ROOT_ID,
      self::STATUS_TYPE_ID,
      self::PUBLICATION_STATUS_ID,
      self::ACTOR_NAME_TYPE_ID,
      self::INFORMATION_OBJECT_TEMPLATE_ID,
      self::JOB_STATUS_ID);

  public function __construct($id = null)
  {
    parent::__construct();

    if (!empty($id))
    {
      $this->id = $id;
    }
  }

  public function __toString()
  {
    if (!$this->getName())
    {
      return (string) $this->getName(array('sourceCulture' => true));
    }

    return (string) $this->getName();
  }

  protected function insert($connection = null)
  {
    if (!isset($this->slug))
    {
      $this->slug = QubitSlug::slugify($this->__get('name', array('sourceCulture' => true)));
    }

    return parent::insert($connection);
  }

  public static function getRoot()
  {
    return parent::getById(self::ROOT_ID);
  }

  public static function addEditableTaxonomyCriteria($criteria)
  {
    $criteria->add(QubitTaxonomy::ID, self::$lockedTaxonomies, Criteria::NOT_IN);

    return $criteria;
  }

  public static function getEditableTaxonomies()
  {
    $criteria = new Criteria;
    $criteria = self::addEditableTaxonomyCriteria($criteria);

    // Add criteria to sort by name with culture fallback
    $criteria->addAscendingOrderByColumn('name');
    $options = array('returnClass'=>'QubitTaxonomy');
    $criteria = QubitCultureFallback::addFallbackCriteria($criteria, 'QubitTaxonomy', $options);

    return QubitTaxonomy::get($criteria);
  }

  public static function getTaxonomyTerms($taxonomyId, $options = array())
  {
    $criteria = new Criteria;
    $criteria->add(QubitTerm::TAXONOMY_ID, $taxonomyId);

    // Only include top-level terms if option is set
    if (isset($options['level']) && $options['level'] == 'top')
    {
      $criteria->add(QubitTerm::PARENT_ID, QubitTerm::ROOT_ID);
    }

    // Sort alphabetically
    $criteria->addAscendingOrderByColumn('name');

    // Do source culture fallback
    $criteria = QubitCultureFallback::addFallbackCriteria($criteria, 'QubitTerm');

    return QubitTerm::get($criteria);
  }

  /**
   * Get an associative array of terms
   */
  public function getTermsAsArray($connection = null)
  {
    if (empty($this->id))
    {
      throw new sfException('Invalid taxonomy id');
    }

    if (!isset($connection))
    {
      $connection = Propel::getConnection();
    }

    $sql = <<<SQL
      SELECT
        term.id AS `id`,
        term.taxonomy_id AS `taxonomy_id`,
        term.code AS `code`,
        term.parent_id AS `parent_id`,
        term.lft AS `lft`,
        term.rgt AS `rgt`,
        term.source_culture AS `source_culture`,
        term_i18n.name AS `name`,
        term_i18n.culture as `culture`
      FROM term INNER JOIN term_i18n ON term.id = term_i18n.id
      WHERE term.taxonomy_id = ?
      ORDER BY term_i18n.culture ASC, term_i18n.name ASC;
SQL;

    $statement = $connection->prepare($sql);
    $statement->execute([$this->id]);

    return  $statement->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getTermNameToIdLookupTable($connection = null)
  {
    $terms = $this->getTermsAsArray($connection);

    if (!is_array($terms) || count($terms) == 0)
    {
      return;
    }

    foreach ($terms as $term)
    {
      // Trim and lowercase values for lookup
      $term = array_map(function ($str) {
        return trim(strtolower($str));
      }, $term);

      $idLookupTable[$term['culture']][$term['name']] = $term['id'];
    }

    return $idLookupTable;
  }
}
