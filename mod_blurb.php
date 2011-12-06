<?php

/**
 * @version		1.0
 * @package		Blurb_Module
 * @author		Matt Grannary - mattgrannary.com
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once dirname(__FILE__).'/helper.php';

$width = $params->get("blurb_width");
settype($width,"integer");

$height = $params->get("blurb_height");
settype($height,"integer");

if(!empty($params->get('backgroundimage'))) {
	$header_style = modBlurbHelper::getHeaderBackgroundStyle($params);
}

require JModuleHelper::getLayoutPath('mod_custom', $params->get('layout', 'default'));

?>

