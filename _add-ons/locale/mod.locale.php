<?php
/**
 * Modifier_locale
 * Localization addon for Statamic 1.x
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       https://github.com/lesaff/statamic-locale
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.0       Initial release
 *
 * Usage
 * {{ variable|locale:param1:param2:param3 }}
 * param1 : localization type
 * Available options: datetime|currency|numeric
 * Default: datetime
 *
 * param2: language pack
 * Please consult readme.md on how to check your server to see available language pack on your server
 * You can use the predefined selection from `default.yaml` and edit it accordingly
 *
 * param3: custom output format
 * You can use the predefined selection from `default.yaml` and edit it accordingly
 */

use \Carbon\Carbon;

class Modifier_locale extends Modifier {

    public function index($value, $parameters=array())
    {
        // Type of localization
        // currency, numeric or datetime
        switch($parameters[0]) {

            case 'datetime':
                return $this->tasks->localeDateTime($value, $parameters);
                break;
            case 'currency':
                break;
            case 'numeric':
                break;
            default:
                return $this->tasks->localeDateTime($value, $parameters);
        }
    }
}
