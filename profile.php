<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 12-Dec-18
 * Time: 10:42 PM
 */

session_start();
include_once ('views/header.view.php');
$user_data = Repository::getSome($db, 'users', 'id', $_SESSION['id'])[0];
include_once ('views/profile.view.php');
include_once ('views/footer.view.php');