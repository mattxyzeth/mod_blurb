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


?>

<h4 class="mod_blurb_title" <?php if(isset($header_style)) echo "style=\"".$header_style."\"";?>>
<?php if(!empty($params->get("title"))) echo trim($title); ?>	
</h4>
<p class="mod_blurb_content" style="<?php
if($width) echo "width:".$width."px;";
if($height) echo "height:".$height."px;";
?>
overflow:auto;">
<?php
echo trim($params->get("blurb"));
?>
</p>