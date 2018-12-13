<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 11:41 AM
 */

session_start();
include_once ('views/header.logged.view.php');
include_once ('views/change_pass.php');

if (isset($_POST['confirmChangePass'])) {
    $oldPass = $_POST['old_password'];
    $newPass = $_POST['new_password'];
    $confirmPass = $_POST['confirm_password'];

    $user_data = Repository::getSome($db, 'users', 'id', $_SESSION['id'])[0];

    if (!password_verify($oldPass, $user_data->password)){
        echo "Неправилна парола!";
        exit;
    }
    if ($newPass != $confirmPass){
        echo "Паролите не съвпадат!";
        exit;
    }

    $newPass = password_hash($newPass, PASSWORD_DEFAULT);
    Repository::update($db, 'users', ['password'], [$newPass], 'id', $_SESSION['id']);
    header("Location: profile.php");
}