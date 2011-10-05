<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
/**
* mambo-phphop Product Categories Module
* NOTE: THIS MODULE REQUIRES AN INSTALLED VirtueMart Component!
*
* @version $Id: mod_product_categories.php 1352 2008-04-04 19:27:17Z soeren_nb $
* @package VirtueMart
* @subpackage modules
* 
* @copyright (C) 2004-2008 soeren - All Rights Reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* VirtueMart is Free Software.
* VirtueMart comes with absolute no warranty.
*
* www.virtuemart.net
*/
include_once "mod_frontpage_categories_functions.php";
	
global $jscook_type, $jscookMenu_style, $jscookTree_style;

// Load the virtuemart main parse code
if( file_exists(dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' )) {
	require_once( dirname(__FILE__).'/../../components/com_virtuemart/virtuemart_parser.php' );
	$mosConfig_absolute_path = realpath( dirname(__FILE__).'/../..' );
} else {
	require_once( dirname(__FILE__).'/../components/com_virtuemart/virtuemart_parser.php' );
}

$category_id = vmGet( $_REQUEST, 'category_id');

/* Get module parameters */
$class_sfx = $params->get( 'class_sfx', "" );
$num_columns = $params->get( 'num_columns', "3" );
$mod_height = $params->get( 'mod_height', "200" );
$mod_width = $params->get( 'mod_width', "700" );
$cat_height = $params->get( 'cat_height', "90" );
$image_width = $params->get( 'image_width', "90" );
$sub_categories_display = $params->get( 'sub_categories_display', '1' );
$_REQUEST['root_label'] = $params->get( 'root_label', 'Shop' );
$class_mainlevel = "mainlevel".$class_sfx;

global $VM_LANG, $sess;
if( vmIsJoomla('1.5' )) {
	$vm_path = $mosConfig_absolute_path.'/modules/mod_virtuemart';
} else {
	$vm_path = $mosConfig_absolute_path.'/modules';
}

require_once(CLASSPATH.'ps_product_category.php');
$ps_product_category = new ps_product_category();

#echo $ps_product_category->get_category_tree( $category_id, $class_mainlevel );
#echo $ps_product_category->get_subcategory( '1'); '.$mosConfig_absolute_path.'
echo '<link rel="stylesheet" href="modules/mod_frontpage_categories/mod_frontpage_categories.css" type="text/css" />
<div style="width: '.$mod_width.'px;height:'.$mod_height.'px;background:#000;">';
echo get_category_tree2($category_id, $class_mainlevel,$num_columns,$cat_height,$image_width,$sub_categories_display);
echo '</div>';


 ?>