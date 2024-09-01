<?php
    $title = "Автоподбор — профиль";
    $css = "style.css";
    $active1 = "";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "";
    $active6 = "active";
    require_once "block/header.php";
    $Uuser = $_SESSION['user']['nick'];

    if(!$_SESSION['user']){
        header('Location: index.php');
    }
    $sql = mysqli_query($link, "SELECT `email`,`phone` FROM `user_reg` WHERE `nick` = '$Uuser'");
    $result = mysqli_fetch_array($sql);
?>

    <main>
    <h2 style="margin-top: 0;">ДОБРЫЙ ДЕНЬ, <?= strtoupper($_SESSION['user']['nick'])?></h2>
    <div class="private_cont">
        <form action="save.php" method="get">
        <span id="cont_pr">Контактные данные:</span><br>
        <span id="redact" class="red">Редактировать</span><br><br>
        <span>Номер телефона: <span class="ph_em"><?php echo $result['phone'] ?></span></span><input class="btn b_r" type="text" name="phone" id=""><br>
        <span>Электронная почта: <span class="ph_em"><?php echo $result['email'] ?></span></span><input class="btn b_r" type="text" name="email" id=""><br>
        <input type="submit" class="save btn" value="Сохранить">
    </form>

    </div>
		<div class="fav">

		</div>
    <div id="exit_prof_div"><a href="logout.php" id="exit_prof">Выйти</a></div>

    </main>
    <style>
        @media (min-width: 799px){
            h2{
                width: 550px;
            }
        }
        @media (max-width: 800px){
            h2{
                max-width: 500px;
            }
        }
    </style>
<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $jsMain = "js/main.js";
    require_once "block/footer.php";
?>
<script>
        $('.red').click(function(){
            $('.red').css('display','none')
            $('.save').css('display','inline')
            $('.b_r').css('display','inline')
            $('.ph_em').css('display','none')
        })
        $('.save').click(function(){
            $('.save').css('display','none')
            $('.red').css('display','inline')
            $('.ph_em').css('display','inline')
        })
</script>
<script>
    let text = $('.ErrPM p').text()
    if($('.ErrPM p').text() == 'Вы успешно зарегистрировались!'){
        $('.ErrPM').css('background-color','#97e24198')
        }else if($('.ErrPM p').text() == 'Вы успешно авторизовались!'){
        $('.ErrPM').css('background-color','#97e24198')
        }else{
        $('.ErrPM').css('background-color','#a11d1dbd')
        }
    if($('.ErrPM p').text() == 'Данные сохранены'){
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