<!DOCTYPE html>
<html>
<head>
	<title>AutoMobile</title>
    <link type="text/css" rel="stylesheet" href="../../css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="../../css/logged.css">
</head>
<body>
<?php
    include_once ($_SERVER['DOCUMENT_ROOT'] . '\db_connect.php');
    spl_autoload_register();
if (isset($_SESSION['id'])) : ?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php"><img src="../../Images/logo.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../profile.php">
            <strong>Здравей, <?= $_SESSION['first_name'] ?> <span style="color: red">(Admin mode)</span></strong>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../add-car.php">Добави нова обява!</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
    <span class="navbar-text">
      <a href="../logout.php">Изход</a>
    </span>
  </div>
</nav>

<?php endif; ?>


