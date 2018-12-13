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
$car_data = Repository::getSome($db, 'ads', 'id', $car_id)[0];

include_once ('views/view-ad.view.php');
