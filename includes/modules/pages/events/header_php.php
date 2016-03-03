<?php
/**
 * @package Header for Scheduled Events 1.6
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: header_php.php 3001 2012-01-18 11:45:06Z dbltoe $
 */

require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));

// include template specific file name defines
$define_page = zen_get_file_directory(DIR_WS_LANGUAGES . $_SESSION['language'] . '/html_includes/', FILENAME_DEFINE_EVENTS, 'false');

$result = $db->Execute("SELECT * FROM " . TABLE_EVENTS . " WHERE (event_stop >= NOW()-1) ORDER BY event_start");
  $eventData = array();
  while (!$result->EOF) {
    $eventData[] = $result->fields;
    $result->MoveNext();
  }
$breadcrumb->add(NAVBAR_TITLE);  
?>