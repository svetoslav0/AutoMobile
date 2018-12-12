<!DOCTYPE html>
<html>
<head>
	<title>AutoMobile</title>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php
    include_once ($_SERVER['DOCUMENT_ROOT'] . '\db_connect.php');
    spl_autoload_register();
?>
<div style="background-color: lightblue">
	Welcome,
	<?= $_SESSION['first_name'] ?>
    <span style="float: right">
        <a href="/add-car.php">Add new car advertisement</a>
		<a href="/logout.php">Logout</a>
	</span>
</div>


