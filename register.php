<?php
    session_start();

    if (isset($_SESSION['error'])){
        echo "<div style='color: red; font-weight: bold'>" . $_SESSION['error'] . "</div>";
        unset($_SESSION['error']);
    }
?>
<h2>Register:</h2>
    <hr>
<form method="post">
    <table>
        <tr>
            <td>Username: <span style="color: red">*</span></td>
            <td><input type="text" name="username" /></td>
        </tr>
        <tr>
            <td>Password: <span style="color: red">*</span></td>
            <td><input type="password" name="password" /></td>
        </tr>
        <tr>
            <td>Confirm password: <span style="color: red">*</span></td>
            <td><input type="password" name="confirm_password" /></td>
        </tr>
        <tr>
            <td>Email: <span style="color: red">*</span></td>
            <td><input type="text" name="email" /></td>
        </tr>
        <tr>
            <td>First name:</td>
            <td><input type="text" name="first_name" /></td>
        </tr>
        <tr>
            <td>Last name:</td>
            <td><input type="text" name="last_name" /></td>
        </tr>
        <tr>
            <td><input type="submit" value="Register" name="submit" /></td>
        </tr>
    </table>
</form>

<?php

include_once ("db_connect.php");

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];

    validate($username, $password, $confirm_password, $email);

    $result = $db->prepare("INSERT INTO users(username, password,  email, first_name, last_name) 
                              VALUES (:username, :password,  :email, :first_name, :last_name)");
    $result->bindParam("username", $username);
    $result->bindParam("password", password_hash($password, PASSWORD_DEFAULT));
    $result->bindParam("email", $email);
    $result->bindParam("first_name", $firstName);
    $result->bindParam("last_name", $lastName);

    $result->execute();

    header("Location: login.php");
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


    if (!$isValid){
        header("Location: register.php");
        exit;
    }
}
