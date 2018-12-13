<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 11:17 PM
 */

session_start();
include_once ('../Repository.php');
include_once ('views/header.logged.view.php');

$unseenMessages = Repository::getSome($db, 'admin_messages', 'isSeen', '0');
$seenMessages = Repository::getSome($db, 'admin_messages', 'isSeen', '1');
include_once ('views/messages.view.php');