<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 24-Nov-18
 * Time: 10:27 AM
 */

include "db_connect.php";

$self = str_replace(basename(__FILE__), '', $_SERVER['PHP_SELF']);
$url_parts = explode('/', str_replace($self, '', $_SERVER['REQUEST_URI']));

$controller_name = array_shift($url_parts);

header("Location: $controller_name");