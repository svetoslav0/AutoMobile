<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 24-Nov-18
 * Time: 10:31 AM
 */

include_once ('conf.php');

try{
    $db = new PDO("mysql:host=" . DOMAIN . ";dbname=" . DBNAME, USERNAME, PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Successfully connected.<br>";
}catch (PDOException $e){
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

