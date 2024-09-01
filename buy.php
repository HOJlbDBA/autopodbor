<?php
    session_start();
    require_once "functions.php";
    $cnum = $_REQUEST['eml'];
    $name = $_SESSION['user']['nick'];
    $eml = mysqli_query($link, "SELECT `email`,`phone` FROM `user_reg` WHERE `nick` = '$name'");
    $result = mysqli_fetch_array($eml);
    $eml_buy = mysqli_query($link, "SELECT `contact_email` FROM `automobiles` WHERE `id` = '$cnum'");
    $result2 = mysqli_fetch_array($eml_buy);
    $email = $result['email'];
    $title = "Заявка на покупку от пользователя $name";
    $phone = $result['phone'];
    $text = "Телефон покупателя: $phone";
    $fromEmail = $result2['contact_email'];
    $s = "Ваша заявка на покупку перенаправлена создателю анкеты, ожидайте звонка!";
    mail($fromEmail, $title, $text, 'From:'.$email. "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8");
    header('Location: sort.php');
?>