<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'kikmedia',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes

	// Controllers

	// Drivers

	// Elements
	'Contao\ContentUnsliderStart'        => 'system/modules/core/elements/ContentSliderStart.php',
	'Contao\ContentUnsliderStop'         => 'system/modules/core/elements/ContentSliderStop.php',

	// Forms

	// Library

	// Models

	// Modules

	// Pages
	'Contao\PageRoot'                  => 'system/modules/core/pages/PageRoot.php',

	// Widgets

));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(

	'ce_unslider_start'     => 'system/modules/unslider/templates/elements',
	'ce_unslider_stop'      => 'system/modules/unslider/templates/elements',
	'j_unslider'            => 'system/modules/unslider/templates/jquery',
));