<?php
/**
 * Created by PhpStorm.
 * User: Svetoslav
 * Date: 24-Nov-18
 * Time: 10:27 AM
 */

session_start();

include "db_connect.php";

if (!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}

include_once('views/header.view.php');
?>


<p>
	This is index content page
</p>


<?php
include_once('views/footer.view.php');
?>

