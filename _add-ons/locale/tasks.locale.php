<?php
/**
 * Tasks_locale
 * Localization addon for Statamic 1.x
 *
 * @author     Rudy Affandi <rudy@adnetinc.com>
 * @copyright  2015
 * @link       https://github.com/lesaff/statamic-locale
 * @license    http://opensource.org/licenses/MIT
 *
 * Versions
 * 1.0.0       Initial release
 */

use \Carbon\Carbon;

class Tasks_locale extends Tasks {

    var $meta = array(
        'name'          => 'Locale',
        'version'       => '1.0.0',
        'author'        => 'Rudy Affandi',
        'author_url'    => 'https://github.com/lesaff/statamic-locale'
    );

    public function localeDateTime($value, $parameters)
    {
        // Let's gather all the facts
        $datetime = Carbon::parse($value);
        $config   = $this->getConfig();
        $language = $config['locale'][$parameters[1]];
        $format   = $config['datetime']['format'][$parameters[2]];

        setlocale(LC_TIME, $language);
        return $datetime->formatLocalized($format);
    }
}
