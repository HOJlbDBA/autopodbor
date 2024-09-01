<?php
    $title = "Автоподбор — Главная";
    $cssSlick = "css/slick.css";
    $css = "style.css";
    $cssUnslider = "css/unslider.css";
    $cssUnsliderDots = "css/unslider-dots.css";
    $active1 = "active";
    $active2 = "";
    $active3 = "";
    $active4 = "";
    $active5 = "";
    $active6 = "";
    require_once "block/header.php";
?>
    <div class="ads">
        <p>Хотите подобрать себе автомобиль? <br> Переходите в наш<a href="sort.php"><span id="ads_a"> КАТАЛОГ</span></a>!</p><span id="x">x</span>
    </div>
<main>
        <h2 style="margin-top: 0; width: 300px;">ПОПУЛЯРНОЕ</h2>
        <section>
            <div class="multiple-items">
            <?php  $slide = mysqli_query($link, "SELECT `name` FROM `automobiles` WHERE `popular` = 1");
                while ($result = mysqli_fetch_array($slide)) {
                echo "<div>
                        <a href=\"sort.php\"><img src=\"img/autom/{$result['name']}.png\"></a><p>{$result['name']}</p><p>Москва</p>
                    </div>";
            }?>
            </div>
            <div class="slick-slide"></div>
        </section>
        <h2>НОВИНКИ</h2>
        <div class="block_new_auto">
				<a href="sort.php"><div class="cart_new_auto">
                <div class="img_new_auto">
                    <img src="img/autom/econom.jpg" alt="">
                    </div>
                    <div id="t_new_auto"><span id="h_new_auto">Эконом</span><p>до 1,5 млн ₽</p></div>
            </div></a>
            <a href="sort.php"><div class="cart_new_auto">
                <div class="img_new_auto">
                    <img src="img/autom/comfort.jpg" alt="">
                    </div>
                    <div id="t_new_auto"><span id="h_new_auto">Комфорт</span><p>до 3 млн ₽</p></div>
            </div></a>
            <a href="sort.php"><div class="cart_new_auto">
                <div class="img_new_auto">
                    <img src="img/autom/biznes.jpg" alt="">
                    </div>
                    <div id="t_new_auto"><span id="h_new_auto">Бизнес</span><p>до 6 млн ₽</p></div>
            </div></a>
            <a href="sort.php"><div class="cart_new_auto">
                <div class="img_new_auto">
                    <img src="img/autom/premium.jpg" alt="">
                    </div>
                    <div id="t_new_auto"><span id="h_new_auto">Премиум</span><p>от 6 млн ₽</p></div>
            </div></a>
        </div>
        <h2>НОВОСТИ</h2>
        <div class="block_info">
        <?php  $news = mysqli_query($link, "SELECT `id`,`title`,`img`,`short_descr` FROM `news`");
                while ($resultN = mysqli_fetch_array($news)) {
                echo "<div class=\"statia"; if($resultN['id'] > 3){echo " hide_block\"";}else{echo "\"";}echo">
                        <h4>{$resultN['title']}</h4>
                        <div class=\"img-cart\">
                        <img src=\"img/otz/{$resultN['img']}\">
                        </div>
                        <p>{$resultN['short_descr']}</p>
                    </div>";
            }?>
            <span id="hide">Показать все 🠻</span>
        </div>
    </main>

<?php
    $jsJQ = "js/jquery-3.6.3.min.js";
    $jsTrans = "js/jquery.transit.min.js";
    $jsProverka = "js/proverka.js";
    $jsMain = "js/main.js";
    $jsSlides = "js/slides.js";
    $jsUnslider = "js/unslider-min.js";
    $jsSlick = "js/slick.js";
    require_once "block/footer.php";
?>
<script>
        var interval_ads = setInterval(function(){
            $('.ads').fadeIn(1000)
            clearInterval(interval_ads)
        }, 10000);

        $('#x').click(function(){
            $('.ads').css('display','none')
        })

        $('#hide').click(function(){
    if ($('.hide_block').css('display') == 'none') {
        $('#hide').html('Скрыть все 🠹')
        $('.hide_block').fadeIn(1000)
    }
    else if ($('.hide_block').css('display') == 'block') {
        $('#hide').html('Показать все 🠻')
        $('.hide_block').fadeOut(500)
    }
})
    </script>