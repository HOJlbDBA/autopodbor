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
		$selectedPeredacha = isset($_GET['peredacha_id']) ? $_GET['peredacha_id'] : '';
		$selectedYear = isset($_GET['year_id']) ? $_GET['year_id'] : '';
		$selectedDvigatel = isset($_GET['dvigatel_id']) ? $_GET['dvigatel_id'] : '';
?>

    <main>
    <h2 style="margin-top: 0; width: 190px;">ПОИСК</h2>

    <div class="box_categ">
		<?php if ($result && mysqli_num_rows($result) > 0):?>
    <form id="panel" action="sort.php">
		<div class="block_filter">
		<label style="text-align:center; padding-left:0">Поиск</label>
		<input placeholder="Название" type="text" class="search" id="" name="name" value="<?= isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '' ?>" />
    <select class="btn2" name="peredacha_id" id="sub" ">
        <option selected disabled>КПП</option>
        <?php
        foreach($carsPeredacha as $id => $perName){
            echo '<option value=' . $id . '>' . $perName . '</option>';
        }
        ?>
    </select>
		<select class="btn2" name="storona_rulya_id" id="sub" ">
        <option selected disabled>Руль</option>
        <?php
        foreach($carsStorona_r as $id => $srName){
            echo '<option value=' . $id . '>' . $srName . '</option>';        }
        ?>
    </select>
    <select class="btn2" name="privod_id" id="sub" ">
        <option selected disabled>Привод</option>
        <?php
        foreach($carsPrivod as $id => $priName){
            echo '<option value=' . $id . '>' . $priName . '</option>';
        }
        ?>
    </select>
		<select class="btn2" name="color_id" id="sub" ">
        <option selected disabled>Цвет</option>
        <?php
        foreach($carsColor as $id => $colName){
            echo '<option value=' . $id . '>' . $colName . '</option>';        }
        ?>
    </select>
		<select class="btn2" name="dvigatel_id" id="sub" ">
        <option selected disabled>Двигатель</option>
        <?php
        foreach($carsDvigatel as $id => $dvigName){
            echo '<option value=' . $id . '>' . $dvigName . '</option>';        }
        ?>
    </select>
		<label>Поколение:</label>
		<div class="mini">
    <input class="search" type="number" name="pokolenie_min" placeholder="От">-<input class="search" type="number" name="pokolenie_max" placeholder="До">
		</div>
		<label>Год:</label>
		<div class="mini">
    <input class="search" type="number" name="year_min" placeholder="От">-<input class="search" type="number" name="year_max" placeholder="До">
		</div>
    <label>Мощность:</label>
    <input class="search" type="number" name="power_min" placeholder="От">
    <input class="search" type="number" name="power_max" placeholder="До">
		<label>Пробег:</label>
    <input class="search" type="number" name="probeg_min" placeholder="От">
    <input class="search" type="number" name="probeg_max" placeholder="До">
		<label>Цена:</label>
    <input class="search" type="number" name="price_min" placeholder="От">
    <input class="search" type="number" name="price_max" placeholder="До">
		<input type="submit" id="sub" class="btn2 search" value="Искать">
		</div>

    </form><?php endif;?>
    <div id="content">
    <?php
    if ($result && mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
        $cnum += 1;
        echo "<div class=\"car\" id=\"" . htmlspecialchars($row['name']) . "\">
        <figure><img id=\"auto_sort_img\" src=\"img/autom/{$row['name']}.png\"/>
        <figcaption class=\"cena\">
        <p>Цена:  " . htmlspecialchars($row['price']) . " ₽</p>";
        if(!$_SESSION['user']){
            echo "<div><input class=\"btn blc\" type=\"submit\" value=\"Авторизуйтесь\"></div>";
        }else if($block){
            echo "<div><input class=\"btn blc blc2\" type=\"submit\" value=\"Заполните контактные данные\"></div>";
        }else{
        echo "<div class=\"block\"><input class=\"buy_cart btn cnum$cnum\" type=\"submit\" value=\"Купить\"></div>
        <form action=\"buy.php\" class=\"none2\"><input id=\"none\" type=\"text\" name=\"eml\" value=\"$cnum\"><input class=\"ls buy_cart btn cnum$cnum\" type=\"submit\" value=\"Купить\"></form>";}
        echo "</figcaption></figure>
        <div id=\"car_t\">
        <h3>" . htmlspecialchars($row['name']) . "</h3>
				<p>Город: " . htmlspecialchars($row['city']) . "</p>
        <p>Передача: " . htmlspecialchars($row['peredacha_name']) . "</p>
        <p>Год: " . htmlspecialchars($row['year']) . "</p>
        <p>Двигатель: " . htmlspecialchars($row['dvigatel_name']) . "</p>
        <p>Мощность: " . htmlspecialchars($row['power_num']) . " л.с.</p>
        <p>Привод: " . htmlspecialchars($row['privod_name']) . "</p>
        <p>Цвет: " . htmlspecialchars($row['color_name']) . "</p>
        <p>Пробег: " . htmlspecialchars($row['probeg_num']) . " км</p> 
        <p>Руль: " . htmlspecialchars($row['storona']) . "</p>
        <p>Поколение: " . htmlspecialchars($row['pokolenie_num']) . "</p>
        </div>
        </div>";
        }
    }else{
			echo "<div class=\"search_error\"><span id=\"search_error\">Извините, по вашему запросу ничего не найдено.<br><span id=\"back_auto\">Назад<span></span></div>";
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
		if (navigator.geolocation) {
  	navigator.geolocation.getCurrentPosition(function(position) {
    console.log("Latitude: " + position.coords.latitude + 
                ", Longitude: " + position.coords.longitude);
  });
	} else {
  	console.log("Geolocation is not supported by this browser.");
	}
	if($('#content .search_error').length > 0){
		$('#content').css('min-height','0px')
	}
    $('.blc').click(function(){
        location.href = "reg.php"
})
		$('#back_auto').click(function(){
        location.href = "sort.php"
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