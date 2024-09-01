<?php
    require_once "functions.php";
    $name = $_REQUEST['name'];
    $nick = $_REQUEST['nick'];
    $login_reg = $_REQUEST['login_reg'];
    $password_reg = $_REQUEST['password_reg'];
    $password_reg_d = $_REQUEST['password_reg_d'];

if($name != '' && $nick != '' && $login_reg != '' && $password_reg != '' && $password_reg_d != ''){
    if((strlen($name)>=20 && strlen($name)<=100) && (preg_match('/^[а-яёА-ЯЁ\s\-]+$/u', $name)) || (strlen($name)>=10 && strlen($name)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $name))){
        if((strlen($nick)>=3 && strlen($nick)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $nick))){
            if((strlen($login_reg)>=3 && strlen($login_reg)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $login_reg)) || (strlen($password_reg)>=6 && strlen($password_reg)<=50) && (preg_match('/^[a-zA-Z\s\-]+$/u', $password_reg))){
                if($password_reg == $password_reg_d){
                $row = mysqli_query($link,"select * from `user_reg` where login='$login_reg'");
                $row_cnt = mysqli_num_rows($row);
                if($row_cnt > 0){
                    $s = 'Пользователь уже существует';
                }else{
                    // $password_reg = md5($password_reg);
                $query = "INSERT INTO `user_reg` (`id`, `name`, `login`, `nick`, `password`) VALUES (NULL, '$name', '$login_reg', '$nick', '$password_reg')";
                $rezult = mysqli_query($link,$query);
                if($rezult){
                    $s = "Вы успешно зарегистрировались!";
                }else{
                    $s = "Произошла ошибка, попробуйте позже";
                }}
                }else{
                    $s = 'Пароли не совпадают!';
                }
            }else{
                $s = 'Введите корректно свой логин и пароль!';
            }
        }else{
            $s = 'Введите корректно свой никнейм!';
        }
    }else{
        $s = 'Введите корректно свое ФИО!';
    }
}else{
    $s = "Заполните поля формы!";
}
require_once 'reg.php';
?>