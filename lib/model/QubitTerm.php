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

/**
 * Extend functionality of propel generated "BaseTerm" model class.
 *
 * @package    AccesstoMemory
 * @subpackage model
 * @author     Peter Van Garderen <peter@artefactual.com>
 * @author     David Juhasz <david@artefactual.com>
 */
class QubitTerm extends BaseTerm
{
  public const

    // ROOT term id
    ROOT_ID = 110;
  public const


    // Event type taxonomy
    CREATION_ID = 111;
  public const


    CUSTODY_ID = 113;
  public const


    PUBLICATION_ID = 114;
  public const


    CONTRIBUTION_ID = 115;
  public const


    COLLECTION_ID = 117;
  public const


    ACCUMULATION_ID = 118;
  public const


    // Note type taxonomy
    TITLE_NOTE_ID = 119;
  public const


    PUBLICATION_NOTE_ID = 120;
  public const


    SOURCE_NOTE_ID = 121;
  public const


    SCOPE_NOTE_ID = 122;
  public const


    DISPLAY_NOTE_ID = 123;
  public const


    ARCHIVIST_NOTE_ID = 124;
  public const


    GENERAL_NOTE_ID = 125;
  public const


    OTHER_DESCRIPTIVE_DATA_ID = 126;
  public const


    MAINTENANCE_NOTE_ID = 127;
  public const


    // Collection type taxonomy
    ARCHIVAL_MATERIAL_ID = 128;
  public const


    PUBLISHED_MATERIAL_ID = 129;
  public const


    ARTEFACT_MATERIAL_ID = 130;
  public const


    // Actor type taxonomy
    CORPORATE_BODY_ID = 131;
  public const


    PERSON_ID = 132;
  public const


    FAMILY_ID = 133;
  public const


    // Other name type taxonomy
    FAMILY_NAME_FIRST_NAME_ID = 134;
  public const


    // Media type taxonomy
    AUDIO_ID = 135;
  public const


    IMAGE_ID = 136;
  public const


    TEXT_ID = 137;
  public const


    VIDEO_ID = 138;
  public const


    OTHER_ID = 139;
  public const


    // Digital object usage taxonomy
    MASTER_ID = 140;
  public const


    REFERENCE_ID = 141;
  public const


    THUMBNAIL_ID = 142;
  public const


    COMPOUND_ID = 143;
  public const


    // Physical object type taxonomy
    LOCATION_ID = 144;
  public const


    CONTAINER_ID = 145;
  public const


    ARTEFACT_ID = 146;
  public const


    // Relation type taxonomy
    HAS_PHYSICAL_OBJECT_ID = 147;
  public const


    // Actor name type taxonomy
    PARALLEL_FORM_OF_NAME_ID = 148;
  public const


    OTHER_FORM_OF_NAME_ID = 149;
  public const


    // Actor relation type taxonomy
    HIERARCHICAL_RELATION_ID = 150;
  public const


    TEMPORAL_RELATION_ID = 151;
  public const


    FAMILY_RELATION_ID = 152;
  public const


    ASSOCIATIVE_RELATION_ID = 153;
  public const


    // Actor relation note taxonomy
    RELATION_NOTE_DESCRIPTION_ID = 154;
  public const


    RELATION_NOTE_DATE_ID = 155;
  public const


    // Term relation taxonomy
    ALTERNATIVE_LABEL_ID = 156;
  public const


    TERM_RELATION_ASSOCIATIVE_ID = 157;
  public const


    // Status type taxonomy
    STATUS_TYPE_PUBLICATION_ID = 158;
  public const


    // Publication status taxonomy
    PUBLICATION_STATUS_DRAFT_ID = 159;
  public const


    PUBLICATION_STATUS_PUBLISHED_ID = 160;
  public const


    // Name access point
    NAME_ACCESS_POINT_ID = 161;
  public const


    // Function relation type taxonomy
    ISDF_HIERARCHICAL_RELATION_ID = 162;
  public const


    ISDF_TEMPORAL_RELATION_ID = 163;
  public const


    ISDF_ASSOCIATIVE_RELATION_ID = 164;
  public const


    // ISAAR standardized form name
    STANDARDIZED_FORM_OF_NAME_ID = 165;
  public const


    // Digital object usage taxonomy (addition)
    EXTERNAL_URI_ID = 166;
  public const


    // Relation types
    ACCESSION_ID = 167;
  public const


    RIGHT_ID = 168;
  public const


    DONOR_ID = 169;
  public const


    // Rights basis
    RIGHT_BASIS_COPYRIGHT_ID = 170;
  public const


    RIGHT_BASIS_LICENSE_ID = 171;
  public const


    RIGHT_BASIS_STATUTE_ID = 172;
  public const


    RIGHT_BASIS_POLICY_ID = 173;
  public const


    // Language note
    LANGUAGE_NOTE_ID = 174;
  public const


    // Accrual relation type
    ACCRUAL_ID = 175;
  public const


    // Relation type
    RELATED_MATERIAL_DESCRIPTIONS_ID = 176;
  public const


    // Converse term relation
    CONVERSE_TERM_ID = 177;
  public const


    // AIP relation
    AIP_RELATION_ID = 178;
  public const


    // AIP types
    ARTWORK_COMPONENT_ID = 179;
  public const


    ARTWORK_MATERIAL_ID = 180;
  public const


    SUPPORTING_DOCUMENTATION_ID = 181;
  public const


    SUPPORTING_TECHNOLOGY_ID = 182;
  public const


    // Job statuses
    JOB_STATUS_IN_PROGRESS_ID = 183;
  public const


    JOB_STATUS_COMPLETED_ID = 184;
  public const


    JOB_STATUS_ERROR_ID = 185;
  public const


    // Digital object usage taxonomy (addition)
    OFFLINE_ID = 186;
  public const


    // Relation type taxonomy
    MAINTAINING_REPOSITORY_RELATION_ID = 187;
  public const


    ACTOR_OCCUPATION_NOTE_ID = 188;
  public const


    // User action taxonomy
    USER_ACTION_CREATION_ID = 189;
  public const


    USER_ACTION_MODIFICATION_ID = 190;
  public const


    // Digital object usage taxonomy (addition)
    EXTERNAL_FILE_ID = 191;
  public const


    // Accession alternative identifier taxonomy
    ACCESSION_ALTERNATIVE_IDENTIFIER_DEFAULT_TYPE_ID = 192;
  public const


    // Accession event type: physical transfer
    ACCESSION_EVENT_PHYSICAL_TRANSFER_ID = 193;
  public const


    // Accession event note
    ACCESSION_EVENT_NOTE_ID = 194;
  public $disableNestedSetUpdating = false;

  protected $CountryHitCount = null;
  protected $LanguageHitCount = null;
  protected $SubjectHitCount = null;

  public function __toString()
  {
    $string = $this->name;
    if (!isset($string))
    {
      $string = $this->getName(array('sourceCulture' => true));
    }

    return (string) $string;
  }

  public static function isProtected($id)
  {
    // The following terms cannot be edited by users because their values are used in application logic
    return in_array($id, array(
      QubitTerm::ACCESSION_ID,
      QubitTerm::ACCRUAL_ID,
      QubitTerm::ACCUMULATION_ID,
      QubitTerm::ALTERNATIVE_LABEL_ID,
      QubitTerm::ARCHIVAL_MATERIAL_ID,
      QubitTerm::ARCHIVIST_NOTE_ID,
      QubitTerm::ARTEFACT_ID,
      QubitTerm::ARTEFACT_MATERIAL_ID,
      QubitTerm::ASSOCIATIVE_RELATION_ID,
      QubitTerm::AUDIO_ID,
      QubitTerm::COLLECTION_ID,
      QubitTerm::COMPOUND_ID,
      QubitTerm::CONTAINER_ID,
      QubitTerm::CONTRIBUTION_ID,
      QubitTerm::CONVERSE_TERM_ID,
      QubitTerm::CORPORATE_BODY_ID,
      QubitTerm::CREATION_ID,
      QubitTerm::CUSTODY_ID,
      QubitTerm::DISPLAY_NOTE_ID,
      QubitTerm::DONOR_ID,
      QubitTerm::EXTERNAL_URI_ID,
      QubitTerm::FAMILY_ID,
      QubitTerm::FAMILY_NAME_FIRST_NAME_ID,
      QubitTerm::FAMILY_RELATION_ID,
      QubitTerm::GENERAL_NOTE_ID,
      QubitTerm::HAS_PHYSICAL_OBJECT_ID,
      QubitTerm::HIERARCHICAL_RELATION_ID,
      QubitTerm::IMAGE_ID,
      QubitTerm::LANGUAGE_NOTE_ID,
      QubitTerm::LOCATION_ID,
      QubitTerm::MAINTENANCE_NOTE_ID,
      QubitTerm::MASTER_ID,
      QubitTerm::NAME_ACCESS_POINT_ID,
      QubitTerm::OTHER_DESCRIPTIVE_DATA_ID,
      QubitTerm::OTHER_FORM_OF_NAME_ID,
      QubitTerm::OTHER_ID,
      QubitTerm::PARALLEL_FORM_OF_NAME_ID,
      QubitTerm::PERSON_ID,
      QubitTerm::PUBLICATION_ID,
      QubitTerm::PUBLICATION_NOTE_ID,
      QubitTerm::PUBLICATION_STATUS_DRAFT_ID,
      QubitTerm::PUBLICATION_STATUS_PUBLISHED_ID,
      QubitTerm::PUBLISHED_MATERIAL_ID,
      QubitTerm::REFERENCE_ID,
      QubitTerm::RELATION_NOTE_DATE_ID,
      QubitTerm::RELATION_NOTE_DESCRIPTION_ID,
      QubitTerm::RIGHT_BASIS_COPYRIGHT_ID,
      QubitTerm::RIGHT_BASIS_LICENSE_ID,
      QubitTerm::RIGHT_BASIS_STATUTE_ID,
      QubitTerm::RIGHT_ID,
      QubitTerm::ROOT_ID,
      QubitTerm::SCOPE_NOTE_ID,
      QubitTerm::SOURCE_NOTE_ID,
      QubitTerm::STANDARDIZED_FORM_OF_NAME_ID,
      QubitTerm::STATUS_TYPE_PUBLICATION_ID,
      QubitTerm::TEMPORAL_RELATION_ID,
      QubitTerm::TERM_RELATION_ASSOCIATIVE_ID,
      QubitTerm::TEXT_ID,
      QubitTerm::THUMBNAIL_ID,
      QubitTerm::TITLE_NOTE_ID,
      QubitTerm::VIDEO_ID,
      QubitTerm::JOB_STATUS_IN_PROGRESS_ID,
      QubitTerm::JOB_STATUS_COMPLETED_ID,
      QubitTerm::JOB_STATUS_ERROR_ID,
      QubitTerm::ACTOR_OCCUPATION_NOTE_ID,
      QubitTerm::ACCESSION_EVENT_PHYSICAL_TRANSFER_ID,
      QubitTerm::ACCESSION_EVENT_NOTE_ID));
  }

  public function save($connection = null)
  {
    // Add root term as parent if no parent is set and it's not the root term
    if ($this->id != QubitTerm::ROOT_ID && !isset($this->parent))
    {
      $this->parentId = QubitTerm::ROOT_ID;
    }

    parent::save($connection);

    QubitSearch::getInstance()->update($this);

    // Save related terms
    foreach ($this->termsRelatedByparentId as $child)
    {
      $child->indexOnSave = false;
      $child->parentId = $this->id;
      $child->save();
    }
  }

  public static function getRoot()
  {
    return parent::getById(self::ROOT_ID);
  }

  public function setRoot()
  {
    $this->parentId = QubitTerm::ROOT_ID;
  }

  public function delete($connection = null)
  {
    // Cascade delete descendants
    if (0 < count($children = $this->getChildren()))
    {
      foreach ($children as $child)
      {
        $child->delete($connection);
      }
    }

    // Delete relations
    $criteria = new Criteria();
    $cton1 = $criteria->getNewCriterion(QubitRelation::OBJECT_ID, $this->id);
    $cton2 = $criteria->getNewCriterion(QubitRelation::SUBJECT_ID, $this->id);
    $cton1->addOr($cton2);
    $criteria->add($cton1);

    if (0 < count($relations = QubitRelation::get($criteria)))
    {
      foreach ($relations as $relation)
      {
        $relation->delete($connection);
      }
    }

    // Delete relation to objects
    $criteria = new Criteria();
    $criteria->add(QubitObjectTermRelation::TERM_ID, $this->id);

    if (0 < count($otRelations = QubitObjectTermRelation::get($criteria)))
    {
      foreach ($otRelations as $otRelation)
      {
        $otRelation->delete($connection);
      }
    }

    QubitSearch::getInstance()->delete($this);

    parent::delete($connection);
  }

  public function getRole()
  {
    $notes = $this->getNotesByType($options = array('noteTypeId' => QubitTerm::DISPLAY_NOTE_ID));

    if (count($notes) > 0)
    {
      return $notes[0]->getContent($options = array('cultureFallback' => true));
    }
    else
    {
      return $this->getName();
    }
  }

  public static function getCollectionTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::COLLECTION_TYPE_ID, $options);
  }

  public static function getLevelsOfDescription($options = array())
  {
    return QubitTaxonomy::getTaxonomyTerms(QubitTaxonomy::LEVEL_OF_DESCRIPTION_ID, $options);
  }

  public static function getNoteTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::NOTE_TYPE_ID, $options);
  }

  public function getSourceNotes()
  {
    return $this->getNotesByType(array('noteTypeId' => QubitTerm::SOURCE_NOTE_ID));
  }

  public static function getSubjects($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::SUBJECT_ID, $options);
  }

  public static function getPlaces($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::PLACE_ID, $options);
  }

  public static function getActorEntityTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::ACTOR_ENTITY_TYPE_ID, $options);
  }

  public static function getActorNameTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::ACTOR_NAME_TYPE_ID, $options);
  }

  public static function getDescriptionStatuses($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::DESCRIPTION_STATUS_ID, $options);
  }

  public static function getDescriptionDetailLevels($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::DESCRIPTION_DETAIL_LEVEL_ID, $options);
  }

  public static function getRepositoryTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::REPOSITORY_TYPE_ID, $options);
  }

  public static function getActorRoles($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::ACTOR_ROLE_ID, $options);
  }

  public static function getEventTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::EVENT_TYPE_ID, $options);
  }

  public static function getMediaTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::MEDIA_TYPE_ID, $options);
  }

  public static function getUsageTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::DIGITAL_OBJECT_USAGE_ID, $options);
  }

  public static function getMaterialTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::MATERIAL_TYPE_ID, $options);
  }

  public static function getRADNotes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::RAD_NOTE_ID, $options);
  }

  public static function getRADTitleNotes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::RAD_TITLE_NOTE_ID, $options);
  }

  public static function getModsTitleTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::MODS_TITLE_TYPE_ID, $options);
  }

  public static function getThematicAreas($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::THEMATIC_AREA_ID, $options);
  }

  public static function getGeographicSubregions($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::GEOGRAPHIC_SUBREGION_ID, $options);
  }

  /**
   * Return a list of all Physical Object terms
   *
   * @param array $options  option array to pass to Qubit Query object
   * @return QubitQuery array of Physical Object QubitTerm objects
   */
  public static function getPhysicalObjectTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::PHYSICAL_OBJECT_TYPE_ID, $options);
  }

  /**
   * Return a list of all Relation Type terms
   *
   * @param array $options  option array to pass to Qubit Query object
   * @return QubitQuery object
   */
  public static function getRelationTypes($options = array())
  {
    return QubitTaxonomy::getTermsById(QubitTaxonomy::RELATION_TYPE_ID, $options);
  }

  /**
   * Return a list of all Physical object container types
   *
   * @return QubitQuery array of container QubitTerm objects
   */
  public static function getPhysicalObjectContainerTypes()
  {
    $containerTerm = QubitTerm::getById(QubitTerm::CONTAINER_ID);
    return $containerTerm->getDescendants();
  }

  /**
   * Get a list of child terms of $parentTermId. Prefix $indentStr * depth of child
   * relative to parent
   *
   * @param integer $parentTermId  Primary key of parent term
   * @param string  $indentStr     String to prefix to each sub-level for indenting
   *
   * @return mixed  false on failure, else array of children formatted for select box
   */
  public static function getIndentedChildTree($parentTermId, $indentStr = '&nbsp;', $options = array())
  {
    if (!$parentTerm = QubitTerm::getById($parentTermId))
    {
      return false;
    }

    $tree = array();

    $parentDepth = count($parentTerm->getAncestors());

    foreach ($parentTerm->getDescendants()->orderBy('lft') as $i => $node)
    {
      $relativeDepth = intval(count($node->getAncestors()) - $parentDepth - 1);
      $indentedName = str_repeat($indentStr, $relativeDepth).$node->getName(array('cultureFallback' => 'true'));

      if (isset($options['returnObjectInstances']) && true == $options['returnObjectInstances'])
      {
        $tree[sfContext::getInstance()->routing->generate(null, array($node, 'module' => 'term'))] = $indentedName;
      }
      else
      {
        $tree[$node->id] = $indentedName;
      }
    }

    return $tree;
  }

  public function setCountryHitCount($count)
  {
    $this->CountryHitCount = $count;
  }

  public function getCountryHitCount()
  {
    return $this->CountryHitCount;
  }

  public function setLanguageHitCount($count)
  {
    $this->LanguageHitCount = $count;
  }

  public function getLanguageHitCount()
  {
    return $this->LanguageHitCount;
  }

  public function setSubjectHitCount($count)
  {
    $this->SubjectHitCount = $count;
  }

  public function getSubjectHitCount()
  {
    return $this->SubjectHitCount;
  }

  /**
   * Get an aggregate count of all objects related to this term
   *
   * @return integer count of related objects
   */
  public function getRelatedObjectCount()
  {
    $count = 0;
    $count += $this->getRelatedActorCount();
    $count += $this->getRelatedNameCount();
    $count += $this->getRelatedDigitalObjectCount();
    $count += $this->getRelatedInfoObjectCount();
    $count += $this->getRelatedNoteCount();
    $count += $this->getRelatedObjectTermRelationCount();
    $count += $this->getRelatedPhysicalObjectCount();
    $count += $this->getRelatedRepositoryCount();

    return $count;
  }

  /**
   * Count the number of actors that use this term
   *
   * @return integer number of related actors
   */
  public function getRelatedActorCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitActor::TABLE_NAME;
    $sql .= ' INNER JOIN '.QubitObject::TABLE_NAME.' ON '.QubitActor::ID.' = '.QubitObject::ID;
    $sql .= ' WHERE '.QubitObject::CLASS_NAME.' = \'QubitActor\'';
    $sql .= ' AND ('.QubitActor::DESCRIPTION_DETAIL_ID.' = '.$this->id;
    $sql .= ' OR '.QubitActor::DESCRIPTION_DETAIL_ID.' = '.$this->id;
    $sql .= ' OR '.QubitActor::ENTITY_TYPE_ID.' = '.$this->id.')';

    return self::executeCount($sql);
  }

  /**
   * Count the number of actor names that use this term
   * (taxonomy.id = ACTOR_NAME_TYPE_ID)
   *
   * @return integer number of related actor_names
   */
  public function getRelatedNameCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitOtherName::TABLE_NAME;
    $sql .= ' WHERE '.QubitOtherName::TYPE_ID.' = '.$this->id;

    return self::executeCount($sql);
  }

  /**
   * Count the number of digital objects that use this term
   *
   * @return integer number of related digital objects
   */
  public function getRelatedDigitalObjectCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitDigitalObject::TABLE_NAME;
    $sql .= ' WHERE '.QubitDigitalObject::USAGE_ID.' = '.$this->id;
    $sql .= ' OR '.QubitDigitalObject::MEDIA_TYPE_ID.' = '.$this->id;

    return self::executeCount($sql);
  }

  /**
   * Count the number of events that use this term
   * (taxonomy.id = EVENT_TYPE_ID)
   *
   * @return integer number of related events
   */
  public function getRelatedEventCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitEvent::TABLE_NAME;
    $sql .= ' WHERE '.QubitEvent::TYPE_ID.' = '.$this->id;

    return self::executeCount($sql);
  }

  /**
   * Count the number of information objects that use this term
   *
   * @return integer number of related information objects
   */
  public function getRelatedInfoObjectCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitInformationObject::TABLE_NAME;
    $sql .= ' WHERE '.QubitInformationObject::DESCRIPTION_STATUS_ID.' = '.$this->id;
    $sql .= ' OR '.QubitInformationObject::DESCRIPTION_DETAIL_ID.' = '.$this->id;
    $sql .= ' OR '.QubitInformationObject::LEVEL_OF_DESCRIPTION_ID.' = '.$this->id;
    $sql .= ' OR '.QubitInformationObject::COLLECTION_TYPE_ID.' = '.$this->id;

    return self::executeCount($sql);
  }

  /**
   * Get a count of notes that use this term
   *
   * @return integer number of related notes
   */
  public function getRelatedNoteCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitNote::TABLE_NAME.'
      WHERE '.QubitNote::TYPE_ID.' = '.$this->id.';';

    return self::executeCount($sql);
  }

  /**
   * Get a count of object_term_relation records that use this term
   *
   * @return integer related object count
   */
  public function getRelatedObjectTermRelationCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitObjectTermRelation::TABLE_NAME.'
      WHERE '.QubitObjectTermRelation::TERM_ID.' = '.$this->id.';';

    return self::executeCount($sql);
  }

  /**
   * Count the number of physical objects that use this term
   * (taxonomy.id = PHYSICAL_OBJECT_TYPE_ID)
   *
   * @return integer number of related physical objects
   */
  public function getRelatedPhysicalObjectCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitPhysicalObject::TABLE_NAME;
    $sql .= ' WHERE '.QubitPhysicalObject::TYPE_ID.' = '.$this->id;

    return self::executeCount($sql);
  }

  /**
   * Count the number of repositories that use this term
   *
   * @return integer number of related repositories
   */
  public function getRelatedRepositoryCount()
  {
    $sql = 'SELECT COUNT(*) FROM '.QubitRepository::TABLE_NAME;
    $sql .= ' LEFT JOIN '.QubitObjectTermRelation::TABLE_NAME;
    $sql .= ' ON '.QubitRepository::ID.' = '.QubitObjectTermRelation::OBJECT_ID;
    $sql .= ' WHERE '.QubitRepository::DESC_DETAIL_ID.' = '.$this->id;
    $sql .= ' OR '.QubitRepository::DESC_STATUS_ID.' = '.$this->id;
    $sql .= ' OR '.QubitObjectTermRelation::TERM_ID.' = '.$this->id;

    return self::executeCount($sql);
  }

  /**
   * Get a count of related information objects
   *
   * @param integer  ID of term
   * @return integer  count of related information objects
   */
  public static function countRelatedInformationObjects($id)
  {
    $criteria = new Criteria();
    $criteria->add(QubitTerm::ID, $id);

    $criteria->addJoin(QubitTerm::ID, QubitObject::ID);
    $criteria->addJoin(QubitTerm::ID, QubitObjectTermRelation::TERM_ID);
    $criteria->addJoin(QubitObjectTermRelation::OBJECT_ID, QubitInformationObject::ID);

    // Only get published info objects
    $criteria = QubitAcl::addFilterDraftsCriteria($criteria);

    return BasePeer::doCount($criteria)->fetchColumn(0);
  }

  /**
   * Get a basic key['id']/value['name'] array for use as options in form
   * select lists
   *
   * @param integer $taxonomyId parent taxonomy id
   * @param array $options optional paramters
   * @return array select box options
   */
  public static function getOptionsForSelectList($taxonomyId, $options = array())
  {
    $criteria = new Criteria();
    $criteria->add(QubitTerm::TAXONOMY_ID, $taxonomyId);

    // Exclude specified term
    if (isset($options['exclude']))
    {
      // Turn string into a single entity array
      $excludes = (is_array($options['exclude'])) ? $options['exclude'] : array($options['exclude']);

      foreach ($excludes as $exclude)
      {
        $criteria->addAnd(QubitTerm::ID, $exclude, Criteria::NOT_EQUAL);
      }
    }

    $criteria->addAscendingOrderByColumn('name');
    $criteria = QubitCultureFallback::addFallbackCriteria($criteria, 'QubitTerm', $options);
    $terms = QubitTerm::get($criteria);

    $selectList = array();
    if (isset($options['include_blank']))
    {
      $selectList[null] = '';
    }
    foreach ($terms as $term)
    {
      $displayValue = $term->getName(array('cultureFallback'=>true));

      // Display note content instead of term name - used mainly for displaying
      // event type actor vs. action (e.g. "creator" vs. "creation")
      if (isset($options['displayNote']) && $options['displayNote'] == true)
      {
        if (count($notes = $term->getNotesByType(QubitTerm::DISPLAY_NOTE_ID)))
        {
          $displayValue = $notes[0]->getContent(array('cultureFallback'=>true));
        }
      }

      $selectList[$term->id] = $displayValue;
    }

    return $selectList;
  }

  /**
   * Get the direct descendents of the current term
   *
   * @param array $options optional paramters
   * @return QubitQuery collection of QubitTerm objects
   */
  public function getChildren($options = array())
  {
    $criteria = new Criteria();
    $criteria->add(QubitTerm::PARENT_ID, $this->id);

    $sortBy = (isset($options['sortBy'])) ? $options['sortBy'] : 'lft';

    switch ($sortBy)
    {
      case 'name':
        $criteria = QubitCultureFallback::addFallbackCriteria($criteria, 'QubitTerm');
        $criteria->addAscendingOrderByColumn('name');
        // no break
      case 'lft':
      default:
        $criteria->addAscendingOrderByColumn('lft');
    }

    return QubitTerm::get($criteria, $options);
  }

  public function getTreeViewChildren(array $options = array())
  {
    $numberOfPreviousOrNextSiblings = 4;
    if (isset($options['numberOfPreviousOrNextSiblings']))
    {
      $numberOfPreviousOrNextSiblings = $options['numberOfPreviousOrNextSiblings'];
    }

    // Get first child
    $criteria = new Criteria();
    $criteria->add(QubitTerm::PARENT_ID, $this->id);
    $criteria->add(QubitTerm::TAXONOMY_ID, $this->taxonomyId);
    $criteria = QubitCultureFallback::addFallbackCriteria($criteria, 'QubitTerm');
    $criteria->addAscendingOrderByColumn('name');
    $criteria->addAscendingOrderByColumn('lft');
    $criteria->setLimit(1);
    $first = QubitTerm::getOne($criteria);

    // Create array
    $items = array();
    $items[] = $first;

    // Merge following siblings to the array
    $items = array_merge($items, $first->getTreeViewSiblings(array('limit' => $numberOfPreviousOrNextSiblings + 2, 'position' => 'next')));

    $hasNextSiblings = count($items) > $numberOfPreviousOrNextSiblings;
    if ($hasNextSiblings)
    {
      array_pop($items);
    }

    return array($items, $hasNextSiblings);
  }

  public function getTreeViewSiblings(array $options = array())
  {
    // The max number of items that will be shown
    // The final amount may be smaller if there are no result enough
    $limit = 5;
    if (isset($options['limit']))
    {
      $limit = $options['limit'];
    }

    // Show 'previous' or 'next' siblings
    $position = 'next';
    if (isset($options['position']))
    {
      $position = $options['position'];
    }

    $criteria = new Criteria();
    $criteria->add(QubitTerm::PARENT_ID, $this->parentId);
    $criteria->add(QubitTerm::TAXONOMY_ID, $this->taxonomyId);

    switch ($position)
    {
      case 'previous':

        $criteria->add('name', '
          COALESCE(
            (CASE
              WHEN (current.NAME IS NOT NULL AND current.NAME <> "")
                THEN current.NAME
              ELSE
                source.NAME
              END), "") < '.Propel::getConnection()->quote($this->getName(array('cultureFallback' => true))), Criteria::CUSTOM);

        $criteria->addDescendingOrderByColumn('name');
        $criteria->addDescendingOrderByColumn('lft');

        break;

      case 'next':
      default:

        $criteria->add('name', '
          COALESCE(
            (CASE
              WHEN (current.NAME IS NOT NULL AND current.NAME <> "")
                THEN current.NAME
              ELSE
                source.NAME
              END), "") > '.Propel::getConnection()->quote($this->getName(array('cultureFallback' => true))), Criteria::CUSTOM);

        $criteria->addAscendingOrderByColumn('name');
        $criteria->addAscendingOrderByColumn('lft');

        break;
    }

    $criteria = QubitCultureFallback::addFallbackCriteria($criteria, 'QubitTerm');
    $criteria->setLimit($limit);

    $results = array();
    foreach (QubitTerm::get($criteria) as $item)
    {
      $results[] = $item;
    }

    return $results;
  }

  /**
   * Get terms by taxonomy id. This function gets its results from ElasticSearch.
   */
  public static function getEsTermsByTaxonomyId($taxonomyId, $limit = 10)
  {
    $queryBool = new \Elastica\Query\BoolQuery();
    $queryTerm = new \Elastica\Query\Term();

    $queryTerm->setTerm('taxonomyId', $taxonomyId);
    $queryBool->addMust($queryTerm);

    $query = new \Elastica\Query($queryBool);
    $query->setSize($limit);

    return QubitSearch::getInstance()->index->getType('QubitTerm')->search($query);
  }

  /**
   * Get an array of term id => parent id excluding the root
   * and optionally filtering by taxonomies.
   */
  public static function loadTermParentList($taxonomyIds = array())
  {
    $sql  = 'SELECT term.id, term.parent_id';
    $sql .= ' FROM '.QubitTerm::TABLE_NAME.' term';
    $sql .= ' WHERE term.parent_id != ?';

    if (is_array($taxonomyIds) && count($taxonomyIds) > 0)
    {
      $sql .= ' AND term.taxonomy_id IN ('.implode(',', $taxonomyIds).')';
    }

    return QubitPdo::fetchAll(
      $sql,
      array(self::ROOT_ID),
      array('fetchMode' => PDO::FETCH_KEY_PAIR)
    );
  }

  /**
   * Get a term's converse actor relation term (or null if none exists).
   *
   * @return mixed  QubitTerm or null
   */
  public function getConverseActorRelationTerm()
  {
    // Get any converse relations to the term
    $converseTerms = QubitRelation::getBySubjectOrObjectId(
      $this->id, array('typeId' => QubitTerm::CONVERSE_TERM_ID)
    );

    // If converse relations exist, return related term ID of first found
    if (count($converseTerms))
    {
      return $converseTerms[0]->getOpposedObject($this->id);
    }
  }

  protected function insert($connection = null)
  {
    if (!isset($this->slug))
    {
      $this->slug = QubitSlug::slugify($this->__get('name', array('sourceCulture' => true)));
    }

    return parent::insert($connection);
  }

  protected function updateNestedSet($connection = null)
  {
    if (!$this->disableNestedSetUpdating)
    {
      return parent::updateNestedSet($connection);
    }
  }

  protected static function executeCount($sql)
  {
    $conn = Propel::getConnection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if (count($row = $stmt->fetch()))
    {
      return intval($row[0]);
    }

    return 0;
  }
}
