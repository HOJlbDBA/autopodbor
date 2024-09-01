<?php
    $title = "Автоподбор — Автомобили";
    $cssSlick = "css/slick.css";
    $css = "style.css";
    $active1 = "";
    $active2 = "active";
    $active3 = "";
    $active4 = "";
    $active5 = "";
    $active6 = "";
    require_once "block/header.php";
    session_start();
    $Uuser = $_SESSION['user']['nick'];
    $row = mysqli_query($link,"SELECT `email`,`phone` FROM `user_reg` WHERE (`nick` = '$Uuser') AND (`email` = '' OR `phone` = '')");
    $row_cnt = mysqli_num_rows($row);
    if($row_cnt > 0){
        $block = true;
    }
?>

    <main>
    <h2 style="margin-top: 0; width: 190px;">ПОИСК</h2>

    <div class="box_categ">
    <form id="panel" action="sort.php">
    <select class="btn2" name="automobiles" id="sub" onchange="this.form.submit()">
        <option selected disabled>Автомобили</option>
        <option value="0">Все автомобили</option>
        <?php
        foreach($name as $auto){
            echo '<option value="'.$auto["id"].'">'.$auto["name"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="kpp" id="sub" onchange="this.form.submit()">
        <option selected disabled>КПП</option>
        <?php
        foreach($kpp as $kpp2){
            echo '<option value="'.$kpp2["id"].'">'.$kpp2["type"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="privod" id="sub" onchange="this.form.submit()">
        <option selected disabled>Привод</option>
        <?php
        foreach($privod as $privod2){
            echo '<option value="'.$privod2["id"].'">'.$privod2["type"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="pokolenie" id="sub" onchange="this.form.submit()">
        <option selected disabled>Поколение</option>
        <?php
        foreach($pokolenie as $pokolenie2){
            echo '<option value="'.$pokolenie2["id"].'">'.$pokolenie2["num"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="dvigatel" id="sub" onchange="this.form.submit()">
        <option selected disabled>Двигатель</option>
        <?php
        foreach($dvigatel as $dvigatel2){
            echo '<option value="'.$dvigatel2["id"].'">'.$dvigatel2["type"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="power" id="sub" onchange="this.form.submit()">
        <option selected disabled>Мощность</option>
        <?php
        foreach($power as $power2){
            echo '<option value="'.$power2["id"].'">'.$power2["power"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="color" id="sub" onchange="this.form.submit()">
        <option selected disabled>Цвет</option>
        <?php
        foreach($color as $color2){
            echo '<option value="'.$color2["id"].'">'.$color2["type"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="probeg" id="sub" onchange="this.form.submit()">
        <option selected disabled>Пробег</option>
        <?php
        foreach($probeg as $probeg2){
            echo '<option value="'.$probeg2["id"].'">'.$probeg2["kolvo"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="rule" id="sub" onchange="this.form.submit()">
        <option selected disabled>Руль</option>
        <?php
        foreach($rule as $rule2){
            echo '<option value="'.$rule2["id"].'">'.$rule2["type"].'</option>';
        }
        ?>
    </select>
    <select class="btn2" name="years" id="sub" onchange="this.form.submit()">
        <option selected disabled>Год</option>
        <?php
        foreach($year as $year2){
            echo '<option value="'.$year2["id"].'">'.$year2["year"].'</option>';
        }
        ?>
    </select>
    </form>
    <div id="content">
    <?php
    foreach($name as $auto){
        $cnum += 1;
        echo "<div class=\"car\">
        <figure><img id=\"auto_sort_img\" src=\"img/autom/{$auto['name']}.png\"/>
        <figcaption class=\"cena\">
        <p>Цена: {$auto['price']} ₽</p>";
        if(!$_SESSION['user']){
            echo "<div><input class=\"btn blc\" type=\"submit\" value=\"Авторизуйтесь\"></div>";
        }else if($block){
            echo "<div><input class=\"btn blc blc2\" type=\"submit\" value=\"Заполните контактные данные\"></div>";
        }else{
        echo "<div class=\"block\"><input class=\"buy_cart btn cnum$cnum\" type=\"submit\" value=\"Купить\"></div>
        <form action=\"buy.php\" class=\"none2\"><input id=\"none\" type=\"text\" name=\"eml\" value=\"$cnum\"><input class=\"ls buy_cart btn cnum$cnum\" type=\"submit\" value=\"Купить\"></form>";}
        echo "</figcaption></figure>
        <div id=\"car_t\">
        <h3>{$auto['name']}</h3>
        <p>Передача: {$auto['per']}</p>
        <p>Год: {$auto['ye']}</p>
        <p>Двигатель: {$auto['dv']}</p>
        <p>Мощность: {$auto['pow']} л.с.</p>
        <p>Привод: {$auto['priv']}</p>
        <p>Цвет: {$auto['co']}</p>
        <p>Пробег: {$auto['pro']}</p> 
        <p>Руль: {$auto['ru']}</p>
        <p>Поколение: {$auto['pok']}</p>
        </div>
        </div>";
        }
    ?>
    </div>
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
    
    $('.blc').click(function(){
        location.href = "reg.php"
})
    $('.ls').click(function(){
        localStorage.ms = 1
    })
    if(localStorage.getItem('ms') == 1){
        $('.ErrPM p').text("Ваша заявка на покупку перенаправлена создателю анкеты, ожидайте звонка!")
        $('.ErrPM').css('background-color','#97e24198')
        $('.ErrPM').fadeIn(1000)
        $('.ErrPM').fadeOut(5000)
        localStorage.ms = 0
    }
    $('.block .buy_cart').click(function(){
        if ($('.accept').css('opacity') == '1') {
        $('.accept').fadeIn(1000)
}})

$('#yes').click(function(){
    $('.block').css('display','none')
    $('.none2').css('display','block')
    $('.accept').fadeOut(1000)
})
$('#no').click(function(){$('.accept').fadeOut(1000)})
</script>