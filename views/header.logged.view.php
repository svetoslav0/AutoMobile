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

<nav class="navbar navbar-light" style="background-color: #ffdf80;">
<div style="background-color: lightblue">
	Welcome,
    <a href="../profile.php"><?= $_SESSION['first_name'] ?></a>
    <span style="float: right">
        <a href="/add-car.php">Add new car advertisement</a>
		<a href="/logout.php">Logout</a>
	</span>
</div>
</nav>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      Navbar text with an inline element
    </span>
  </div>
</nav>

<?php endif; ?>


