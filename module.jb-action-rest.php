<?php

/**
 * @copyright   Copyright (C) 2019-2020 Jeffrey Bostoen
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2020-10-23 14:42:38
 *
 * iTop module definition file
 */

SetupWebPage::AddModule(
        __FILE__, // Path to the current file, all other file names are relative to the directory containing this file
        'jb-action-rest/2.6.201023',
		[
                // Identification
                //
                'label' => 'Feature: add REST action, executed on trigger',
                'category' => 'business',

                // Setup
                //
                'dependencies' => [
				
				],
                'mandatory' => false,
                'visible' => true,

                // Components
                //
                'datamodel' => [
					'model.jb-action-rest.php',
					'app/core/action.class.inc.php',
					'app/core/event.class.inc.php'
               ],
                'webservice' => [
				
				],
                'data.struct' => [
                        // add your 'structure' definition XML files here,
                ],
                'data.sample' => [
                        // add your sample data XML files here,
                ],

                // Documentation
                //
                'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
                'doc.more_information' => '', // hyperlink to more information, if any

                // Default settings
                //
                'settings' => [
                        // Module specific settings go here, if any
                ],
        ]
);

