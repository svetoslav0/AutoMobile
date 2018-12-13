<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 9:54 PM
 */
include_once ('views/header.logged.view.php');
require_once ('../Repository.php');
$adId = $_GET['id'];

Repository::delete($db, 'ads', 'id', $adId);

header("Location: index.php");