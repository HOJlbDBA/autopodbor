<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);

    session_start();
    require_once "functions.php";
    if($_SESSION['user']){
        $prof = 'ПРОФИЛЬ';

    }else{
        $prof = 'АВТОРИЗАЦИЯ';
    }
 ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/fav.png" type="image/png">
    <link rel="stylesheet" href="<?=$cssSlick?>">
    <link rel="stylesheet" href="<?=$css?>">
    <link rel="stylesheet" href="<?=$cssUnslider?>">
    <link rel="stylesheet" href="<?=$cssUnsliderDots?>">
    <title><?=$title?></title>
</head>
<body>
    <header id="shadow" class="sticky">
        <div class="logo">
            <a href = "index.php"><img id="logo_main" src="img/logo.png" alt="">
            <span id="logoText" style="color:white">АвтоПодбор</span></a>
            <span id="city"> <img style="width: 17px; position: relative; top: 2px;" src="img/map-ico.png"> Москва</span>
        </div>
        <div class="nav">
            <ul><li><a id="<?=$active1?>" href="index.php">ГЛАВНАЯ</a></li><li><a id="<?=$active2?>" href="sort.php">АВТОМОБИЛИ</a></li><li><a id="<?=$active3?>" href="otz.php">ОТЗЫВЫ</a></li><?php if($_SESSION['user'])echo"<li><a id=\"$active4\" href=\"help.php\">ПОДДЕРЖКА</a></li>"?><li><a id="<?=$active5?>" href="we.php">О НАС</a><li><a id="<?=$active6?>" href="reg.php"><?=$prof?></a></li></ul>
        </div>
        <img id="nav_menu" src="img/menu.png" alt="">
    </header>