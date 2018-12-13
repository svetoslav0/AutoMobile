<?php
    ob_start();
    session_start();

    if (isset($_SESSION['error'])){
        echo "<div style='color: red; font-weight: bold'>" . $_SESSION['error'] . "</div>";
        unset($_SESSION['error']);
    }

include_once('views/header.notlogged.view.php');
include_once ("views/register.view.php");
include_once ("db_connect.php");

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    validate($username, $password, $confirm_password, $email);

    $result = $db->prepare("INSERT INTO users(username, password,  email, first_name, last_name) 
                              VALUES (:username, :password,  :email, :first_name, :last_name)");
    $result->bindParam("username", $username);
    $result->bindParam("password", $hash);
    $result->bindParam("email", $email);
    $result->bindParam("first_name", $firstName);
    $result->bindParam("last_name", $lastName);
    $result->execute();

    header("Location: login.php");
    ob_end_flush();
}

function validate($username, $password, $conf_password, $email){

    $isValid = true;

    // Validate username
    if (strlen($username) < 4){
        $_SESSION['error'] = 'Username too short, should be at least 4 characters';
        $isValid = false;
    }elseif(strlen($username) > 25){
        $_SESSION['error'] = 'Username too long, should be not more than 25 characters';
        $isValid = false;
    }

    // Validate password
    if (strlen($password) < 6){
        $_SESSION['error'] = 'Password is too short, should be at least 6 characters';
        $isValid = false;
    }

    // Validate confirm password
    if ($password != $conf_password){
        $_SESSION['error'] = 'Passwords did not match!';
        $isValid = false;
    }

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email address!';
        $isValid = false;
    }

    /**
    if (!$isValid){
        header("Location: register.php");
        exit;
    }
     **/
}