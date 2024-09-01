<?php
    require_once "functions.php";
    session_start();
    $text = $_REQUEST['text'];
    $title = $_REQUEST['title'];
    $id = $_SESSION['user']['id'];
    $nickname = $_SESSION['user']['nick'];

if($text != '' && $title != ''){
    $row = mysqli_query($link,"select * from `otz` where id_user_reg='$id'");
        $row_cnt = mysqli_num_rows($row);
        if($row_cnt > 0){
            $s = 'Вы уже оставили отзыв';
        }else{
    $query = "INSERT INTO `otz` (`id_otz`, `id_user_reg`,`nick`, `title`, `text`, `date`) VALUES (NULL, '$id', '$nickname', '$title', '$text', NOW())";
    $rezult = mysqli_query($link,$query);
    if($rezult){
        $s = "Вы успешно оставили отзыв!";
    }else{
        $s = "Произошла ошибка, попробуйте позже";
    }}
}else{
    $s = "Заполните поля формы!";
}
require_once 'otz.php';
?>