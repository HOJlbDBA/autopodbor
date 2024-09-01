<?php
    $title = "Автоподбор — Поддержка";
    $css = "style.css";
    $active1 = "";
    $active2 = "";
    $active3 = "";
    $active4 = "active";
    $active5 = "";
    $active6 = "";
    require_once "block/header.php";
    if(!$_SESSION['user']){
        header('Location: index.php');
    }
?>

    <main style="padding: 50px">
    <div id="switch_box1" class="box_reg">
        <form id="form" action="email.php" method="GET">
            <p>E-mail</p>
            <input class="btn" type="text" name="email" id="texthold">
            <p>Сообщение</p>
            <textarea name="text" class="btn t_a" id="texthold" placeholder="Опишите суть вопроса или проблемы"></textarea>
            <input id="sub" class="btn" type="submit" value="Отправить">
        </form>
        </div>
        <div class="pol">
            <p>В случае каких-то вопросов оставьте нам сообщение, мы обязательно отправим вам ответ.</p>
        </div>
    </main>

<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $jsMain = "js/main.js";
    require_once "block/footer.php";
?>
<script>
    let text = $('.ErrPM p').text()
    if($('.ErrPM p').text() == 'Письмо успешно отправлено'){
        $('.ErrPM').css('background-color','#97e24198')
        }else{
        $('.ErrPM').css('background-color','#a11d1dbd')
        }
    jQuery(document).ready(function($) {
        if(text != ""){
    if ($('.ErrPM').css('opacity') == '1') {
    $('.ErrPM').fadeIn(1000)
    $('.ErrPM').fadeOut(3000)
}   else{
    $('.ErrPM').stop(true)
    $('.ErrPM').fadeOut(0)
    $('.ErrPM').fadeIn(1000)
    $('.ErrPM').fadeOut(3000)
}}})
</script>