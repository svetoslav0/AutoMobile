<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 24-Nov-18
 * Time: 10:27 AM
 */

session_start();

include "db_connect.php";

if (!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

echo 'This is index page :)';
var_dump($_SESSION);
