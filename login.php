<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 10-Dec-18
 * Time: 8:45 PM
 */

session_start();

include_once ('views/login.view.php');
include_once ('db_connect.php');

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT id, username, password, first_name, last_name FROM users WHERE username=:username");
    $stmt->bindParam('username', $username);
    $stmt->execute();
    $result = $stmt->fetchObject();
    $hash = $result->password??null;

    if (password_verify($password, $hash)){
        $_SESSION['id'] = $result->id;
        header('Location: index.php');
        exit;
    }else{
        echo '<p> Invalid username or password. </p>';
    }
}
