<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 9:33 PM
 */

session_start();
include_once ('../Repository.php');

if ($_SESSION['id'] != 1){
    include_once ('views/getout.php');
    exit;
}

include "../db_connect.php";

if (!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}

include_once('views/header.logged.view.php');
$ads_data = Repository::getAll($db, 'ads');

include_once ('views/index.view.php');
include_once('views/footer.view.php');
?>