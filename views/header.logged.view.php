<!DOCTYPE html>
<html>
<head>
	<title>AutoMobile</title>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<?php
    include_once ($_SERVER['DOCUMENT_ROOT'] . '\db_connect.php');
    spl_autoload_register();
if (isset($_SESSION['id'])) : ?>
<div style="background-color: lightblue">
	Welcome,
    <a href="../profile.php"><?= $_SESSION['first_name'] ?></a>
    <span style="float: right">
        <a href="/add-car.php">Add new car advertisement</a>
		<a href="/logout.php">Logout</a>
	</span>
</div>
<?php endif; ?>


