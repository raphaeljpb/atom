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

class arGearman
{
  protected static $configPath = 'config/gearman.yml';
  protected static $config = null;

  public static function getConfiguration()
  {
    if (isset(self::$config))
    {
      return self::$config;
    }

    $appConfig = sfContext::getInstance()->getConfiguration();

    if ($appConfig instanceof sfApplicationConfiguration)
    {
      // Use config cache in application context
      $configCache = $appConfig->getConfigCache();
      $configCache->registerConfigHandler(self::$configPath, 'arGearmanConfigHandler');

      self::$config = include $configCache->checkConfig(self::$configPath);
    }
    else
    {
      // Live parsing (task context)
      $configPaths = $appConfig->getConfigPaths(self::$configPath);

      self::$config = arGearmanConfigHandler::getConfiguration($configPaths);
    }

    return self::$config;
  }

  public static function getServers()
  {
    $config = self::getConfiguration();

    if (!isset($config['servers']))
    {
      throw new sfConfigurationException('No servers specified in gearman.yml');
    }

    return $config['servers'];
  }

  public static function getServer()
  {
    $r = self::getServers();

    return array_pop($r);
  }

  /**
   * Get all the abilities this environment will have, a possible combination of
   * abilities specified in the CLI and or abilities specified in one or more
   * 'worker types' as outlined in config/gearman.yml. If no abilities are
   * specified as options, the worker will have all abilities defined under
   * lib/job/.
   */
  public static function getAbilities($options = [])
  {
    $config = self::getConfiguration();

    if (!isset($config['worker_types']))
    {
      throw new sfConfigurationException('No abilities (worker_types) specified in gearman.yml');
    }

    $abilities = [];

    if (isset($options['types']))
    {
      $types = $options['types'];
      if (!is_array($types))
      {
        $types = array_filter(explode(',', $options['types']));
      }

      foreach ($types as $type)
      {
        $type = trim($type);
        if (!array_key_exists($type, $config['worker_types']))
        {
          throw new sfException("Invalid type specified: ${type} -- does it exist in the gearman config file?");
        }

        $abilities = array_merge($abilities, $config['worker_types'][$type]);
      }
    }
    else
    {
      $abilities = call_user_func_array('array_merge', $config['worker_types']);
    }

    return $abilities;
  }
}

class arGearmanConfigHandler extends sfYamlConfigHandler
{
  /**
   * Executes this configuration handler.
   *
   * @param array $configFiles An array of absolute filesystem path to a configuration file
   *
   * @return string Data to be written to a cache file
   */
  public function execute($configFiles)
  {
    // Parse the yaml
    $config = self::getConfiguration($configFiles);

    // Compile data
    $retval = "<?php\n".
              "// auto-generated by %s\n".
              "// date: %s\nreturn %s;\n";
    $retval = sprintf($retval, __CLASS__, date('Y/m/d H:i:s'), var_export($config, true));

    return $retval;
  }

  /**
   * @see sfConfigHandler
   */
  public static function getConfiguration(array $configFiles)
  {
    return self::replaceConstants(self::flattenConfigurationWithEnvironment(self::parseYamls($configFiles)));
  }
}
