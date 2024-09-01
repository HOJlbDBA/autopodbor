<?php
    $title = "Автоподбор — Авторизация";
    $cssSlick = "css/slick.css";
    $css = "style.css";
    $cssUnslider = "css/unslider.css";
    $cssUnsliderDots = "css/unslider-dots.css";
    $active1 = "";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "";
    $active6 = "active";
    require_once "block/header.php";

    if($_SESSION['user']){
        header('Location: profile.php');
    }
?>

    <main style="padding: 50px">
        <div id="switch_box1" class="box_reg">
        <form id="form" action="cong.php" method="GET">
            <p>Логин</p>
            <input class="btn" type="text" name="login" id="texthold">
            <p id="p_holder">Данные, которые вы указывали при регистрации</p>
            <p>Пароль</p>
            <input class="btn" type="text" name="password" id="texthold">
            <input id="sub" class="btn" type="submit" value="Войти">
        </form>
        </div>

        <div id="switch_box2" class="box_reg">
        <form id="form" action="cong_reg.php" method="GET">
            <p>ФИО</p>
            <input class="btn" type="text" name="name" id="texthold">
            <p>Никнейм</p>
            <input class="btn" type="text" name="nick" id="texthold">
            <p>Логин</p>
            <input class="btn" type="text" name="login_reg" id="texthold">
            <p>Пароль</p>
            <input class="btn" type="text" name="password_reg" id="texthold">
            <p>Повторите пароль</p>
            <input class="btn" type="text" name="password_reg_d" id="texthold">
            <input id="sub" class="btn" type="submit" value="Зарегистрироваться">
        </form>
        </div>

        <div class="switch_reg">
                <div class="enter_select" id="enter"><p>Вход</p></div>
                <div class="reg_select" id="enter"><p>Регистрация</p></div>
        </div>
        <div class="pol">
            <p>При входе вы принимаете условия использования сайта и соглашаетесь на обработку персональных данных согласно политике конфиденциальности.</p>
        </div>
    </main>

<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $jsMain = "js/main.js";;
    require_once "block/footer.php";
?>
<script>
    let text = $('.ErrPM p').text()
    if($('.ErrPM p').text() == 'Вы успешно зарегистрировались!'){
        $('.ErrPM').css('background-color','#97e24198')
        }else if($('.ErrPM p').text() == 'Вы успешно авторизовались!'){
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