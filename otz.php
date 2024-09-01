<?php
    $title = "Автоподбор — Отзывы";
    $cssSlick = "css/slick.css";
    $css = "style.css";
    $cssUnslider = "css/unslider.css";
    $cssUnsliderDots = "css/unslider-dots.css";
    $active1 = "";
    $active2 = "";
    $active3 = "active";
    $active4 = "";
    $active5 = "";
    $active6 = "";
    require_once "block/header.php";
    session_start();
?>

    <main style="padding-bottom:100px">
    <h2 id="h_otz">ОСТАВЬТЕ СВОЙ ОТЗЫВ</h2>
    <?php if(!$_SESSION['user']){
        echo "<div id=\"switch_box1\" class=\"box_reg\" style=\"padding-bottom:30px\">
        <form id=\"form\" action=\"otz_obr.php\" method=\"GET\" class=\"blur\">
            <p>Тема</p>
            <input class=\"btn\" type=\"text\" name=\"title\" disabled>
            <p>Текст</p>
            <textarea name=\"text\" class=\"btn t_a\" id=\"texthold\" disabled></textarea>
            <input id=\"sub\" class=\"btn\" type=\"submit\" value=\"Отправить\" disabled>
        </form>
        <span id=\"blur\">Авторизоваться</span>
        </div>";
    }else{
        echo "<div id=\"switch_box1\" class=\"box_reg\">
        <form id=\"form\" action=\"otz_obr.php\" method=\"GET\">
            <p>Тема</p>
            <input class=\"btn\" type=\"text\" name=\"title\">
            <p>Текст</p>
            <textarea name=\"text\" class=\"btn t_a\" id=\"texthold\"></textarea>
            <input id=\"sub\" class=\"btn\" type=\"submit\" value=\"Отправить\">
        </form>
        </div>";
    }
    ?>
    <h2 style="width:230px">ОТЗЫВЫ</h2>
        <div class="block_otz">
        <?php  $otz = mysqli_query($link, "SELECT `id_user_reg`,`title`,`text`,DATE_FORMAT(date,'%d.%m.%Y %H:%i:%s') AS date,`nick` FROM `otz`");
                while ($resultO = mysqli_fetch_array($otz)) {
                    $n = strtoupper($resultO['nick']);
                echo "<div class=\"otz\">
                        <h4>Отзыв от пользователя $n</h4><br>
                        <span>Тема: {$resultO['title']}</span> <br><br>
                        <span>Текст: {$resultO['text']}</span> <br><br>
                        <span>Создан: {$resultO['date']}</span>
                    </div>";
            }?>
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
    $('#blur').click(function(){
    location.href = "reg.php"
    })
    let text = $('.ErrPM p').text()
    if($('.ErrPM p').text() == 'Вы успешно оставили отзыв!'){
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