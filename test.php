<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 26-Nov-18
 * Time: 8:35 AM
 */

$password  = "Some_Password";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

echo $hashed_password;

if (password_verify("Some_Password",
    '$2y$10$rZervNEbrjRg5bl3jHnBpeJcpbytOajaz.bCdO.cEoQeRz4zyspD6')){
    echo 'Correct password!';
}else{
    echo 'Incorrect password<br />';
    echo 'One more change';
    echo 'Hello again';
}

