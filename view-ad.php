<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 3:52 PM
 */

session_start();
include_once ('views/header.logged.view.php');

$car_id = $_GET['car'];
var_dump($car_id);
