<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 13-Dec-18
 * Time: 11:13 AM
 */

session_start();
include_once ('views/header.logged.view.php');

$user_data = Repository::getSome($db, 'users', 'id', $_SESSION['id'])[0];
$username = $user_data->username;
$first_name = $user_data->first_name;
$last_name = $user_data->last_name;
$email = $user_data->email;

include_once ('views/change_data.view.php');

if (isset($_POST['updateData'])){
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $_SESSION = [
        'id' => $_SESSION['id'],
        'username' => $username,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email
    ];
    Repository::update($db, 'users',
        ['username', 'first_name', 'last_name', 'email'],
        [$username, $first_name, $last_name, $email],
        'id', $_SESSION['id']);

    header("Location: profile.php");
}
