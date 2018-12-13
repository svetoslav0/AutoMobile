<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 10:20 PM
 */
session_start();
include_once ('views/header.logged.view.php');
include_once ('views/report-us.view.php');

if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $message = $_POST['textarea'];
    $sender_id = $_SESSION['id'];
    Repository::insert($db, 'admin_messages', [$sender_id, $title, $message, date('Y-m-d H:i'), 0]);

    header("Location: index.php");
}