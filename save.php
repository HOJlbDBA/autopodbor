<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
    require_once "functions.php";
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $Unick = $_SESSION['user']['nick'];

if(preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $phone) || $phone == ''){
    if(preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i", $email) || $email == ''){
        session_start();
        $query = "UPDATE `user_reg` SET `email` = '$email',`phone` = '$phone' WHERE `nick`='{$_SESSION['user']['nick']}'";
        $rezult = mysqli_query($link,$query);
        if($rezult){
            $s = "Данные сохранены";
        }else{
            $s = "Произошла ошибка, попробуйте позже";
        }
    }else{
        $s = 'Введите корректно свою почту!';
    }
    
}else{
    $s = 'Введите корректно свой номер!';
}

require_once 'profile.php';