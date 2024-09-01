<?php
    session_start();
    require_once "functions.php";
    $email = $_REQUEST['email'];
    $text = $_REQUEST['text'];
    $name = $_SESSION['user']['nick'];
    $title = "Вопрос от пользователя $name";
    $fromEmail = "AutoPodbor@mail.ru";

if($email != '' && $text != ''){
    if(preg_match("/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i", $email)){
            $s = "Письмо успешно отправлено";
            mail($fromEmail, $title, $text, 'From:'.$email. "\r\n" . "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8");
    }else{
        $s = 'Введите корректно свою почту!';
    }
}else{
    $s = "Заполните поля формы!";
}
require_once 'help.php';
?>