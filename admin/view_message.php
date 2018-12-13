<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 11:42 PM
 */
session_start();
include_once ('../Repository.php');
include_once ('views/header.logged.view.php');
$message_id = $_GET['mess_id'];
$message = Repository::getSome($db, 'admin_messages', 'id', $message_id)[0];
$title = $message->title;
$content = $message->message;
$sender_id = $message->from_id;
$sender = Repository::getSome($db, 'users', 'id', $sender_id)[0];
$sender_first_name = $sender->first_name;
$sender_last_name = $sender->last_name;
$sender_email = $sender->email;
include_once ('views/view_message.view.php');

Repository::update($db, 'admin_messages', ['isSeen'], ['1'], 'id', $message_id);
