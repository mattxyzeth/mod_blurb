<?php

/**
 * @version		1.0
 * @package		Blurb_Module
 * @author		Matt Grannary - mattgrannary.com
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

class modBlurbHelper() {
	public static function getHeaderBackgroundStyle($params){
		$imgURL = $params->get("backgroundimage");
		if($params->get("image_as_title")) {
			$dim = getimagesize($imgURL);
			$w = $dim[0];
			$h = $dim[1];
			$contW = $params->get("blurb_width");
			settype($contW,"integer");
			if($contW > 0) {
				if($contW < $w) {
					$w = $contW;
					$h = $contW * $h / $w;
				}
			}
			$style = "width:".$w."px;height:".$h."px;background-image:url(".$imgURL.");background-repeat:no-repeat;background-position:top left";
		} else {
			$style = "background-image:url(".$imgURL.");";
		}
		return $style;
	}
}

?>