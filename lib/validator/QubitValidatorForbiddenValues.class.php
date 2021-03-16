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

class QubitValidatorForbiddenValues extends sfValidatorBase
{
  /**
   * @param array $options   An array of options
   * @param array $messages  An array of error messages
   *
   * @see sfValidatorBase
   */
  protected function configure($options = array(), $messages = array())
  {
    $this->addRequiredOption('forbidden_values');
    $this->addMessage('forbidden', sfContext::getInstance()->i18n->__('Value %value% is forbidden'));
  }

  /**
   * @see sfValidatorBase
   */
  protected function doClean($value)
  {
    $forbiddenValues = $this->getOption('forbidden_values');

    if (in_array($value, $forbiddenValues))
    {
      throw new sfValidatorError($this, 'forbidden', array('value' => $value));
    }

    return $value;
  }
}
