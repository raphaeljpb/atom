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

/*
 * Add ability to set whether rad_rights_notes field shown on rad template.
 *
 * @package    AccesstoMemory
 * @subpackage migration
 */
class arMigration0170
{
  public const
    VERSION = 170;
  public const
    // The new database version
    MIN_MILESTONE = 2; // The minimum milestone required

  /**
   * Upgrade
   *
   * @return bool True if the upgrade succeeded, False otherwise
   */
  public function up($configuration)
  {
    if (null === QubitSetting::getByName('rad_rights_notes'))
    {
      $setting = new QubitSetting();
      $setting->setName('rad_rights_notes');
      $setting->setScope('element_visibility');
      $setting->setValue('1');
      $setting->save();
    }

    return true;
  }
}
