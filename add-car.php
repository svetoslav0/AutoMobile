<?php
ob_start();
session_start();
if (!isset($_SESSION['id'])){
    header('Location: login.php');
}
include_once('views/header.logged.view.php');
include_once ('views/add-car.view.php');

if (isset($_POST['add_car_button'])){
    include_once ('upload.php');
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $user_id = $_SESSION['id'];
    $state = $_POST['state'];
    $release_year = $_POST['release_year'];
    $price = $_POST['price'];
    $power = $_POST['power'];
    $volume = $_POST['engine_volume'];
    $category = $_POST['categories'];
    $eurostandart = $_POST['eurostandarts'];
    $engine_type = $_POST['engines'];
    $gears = $_POST['gears'];
    $mileage = $_POST['mileage'];
    $color = $_POST['colors'];
    $town = $_POST['towns'];
    $phone = $_POST['phone'];
    $description = $_POST['textarea'];

    $extras = [];
    $extrasCount = Repository::getRowsCount($db, 'extras');
    for($i = 0; $i < $extrasCount; $i++){
        if (isset($_POST[$i])){
            $extras[] = $i;
        }
    }

    $extras = implode(',', $extras);

    Repository::insert($db, 'ads', [
        $user_id, $brand, $model, $state, $release_year, $price,
        $power, $volume, $category, $eurostandart, $engine_type,
        $gears, $mileage, $color, $town, $extras,
        $_FILES['fileToUpload']['name'], $phone, $description
    ]);

    header("Location: index.php");
    ob_end_flush();
}







