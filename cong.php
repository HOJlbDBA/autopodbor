<?php
    require_once "functions.php";
    $login = $_REQUEST['login'];
    $password = $_REQUEST['password'];

if($login != '' && $password != ''){
    if((strlen($login)>=3 && strlen($login)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $login)) || (strlen($password)>=6 && strlen($password)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $password))){
        $row = mysqli_query($link,"select * from `user_reg` where login='$login' AND password='$password'");
        $row_cnt = mysqli_num_rows($row);
        if($row_cnt > 0){
            $user = mysqli_fetch_assoc($row);
            session_start();
            $_SESSION['user'] = [
                "id" => $user['id'],
                "name" => $user['name'],
                "nick" => $user['nick'],
            ];
            header('Location: profile.php');
        }else{
            $s = 'Неверный логин или пароль';
        }
    }else{
        $s = 'Введите корректно свой логин и пароль!';
    }
}else{
    $s = "Заполните поля формы!";
}
require_once 'reg.php';
?>