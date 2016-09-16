<?php

namespace NerdsAndCompany\Schematic\ConsoleCommands;

use Craft\Craft;
use Craft\BaseCommand as Base;

/**
 * Schematic Export Command.
 *
 * Sync Craft Setups.
 *
 * @author    Nerds & Company
 * @copyright Copyright (c) 2015-2016, Nerds & Company
 * @license   MIT
 *
 * @link      http://www.nerds.company
 */
class ExportCommand extends Base
{
    /**
     * Exports the Craft datamodel.
     *
     * @param string $file file to write the schema to
     * @param string $config_file
     *
     * @return int
     */
    public function actionIndex($file = 'craft/config/schema.yml', $config_file = 'craft/config/schematic_config.yml')
    {
        Craft::app()->schematic->exportToYaml($file, true, $config_file);

        Craft::log(Craft::t('Exported schema to {file}', ['file' => $file]));

        return 0;
    }
}
