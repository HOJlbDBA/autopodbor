    <footer>
        <div class="blockContact">
            <div class="contact">
               <h3>Покупателям</h3>
               <ul class="list" id="list">
                <li><a href="faq.php">Способ оплаты</a></li>
                <li><a href="faq.php">Возврат денежных средств</a></li>
                <li><a href="faq.php">Правила продажи</a></li>
                <li><a href="faq.php">Вопросы и ответы</a></li>
               </ul>
            </div>
            <div class="contact">
               <h3>Компания</h3> 
               <ul class="list" id="list">
                <li><a href="we.php">О нас</a></li>
                <li><a href="faq.php">Реквизиты</a></li>
                <li><a href="faq.php">Контакты</a></li>
               </ul>
            </div>
            <div class="contact">
               <h3>Мы в соцсетях</h3> 
                <div class="futlogo">
                    <ul class="list" id="list">
                     <li><a href="#"><img src="img/vklogo.png" alt=""> Мы в VK</a></li>
                     <li><a href="#"><img src="img/tglogo.png" alt=""> Мы в Telegram</a></li>
                     <li><a href="#"><img src="img/whatsapp.png" alt=""> Мы в Whatsapp</a></li>
                    </ul>
                </div>
            </div>
        </div>
            
        <div class="cop">
           <p>2023 ©АвтоПодбор.
            Все права защищены. Доставка по всей России.</p>
        </div>
    </footer>
    <script src="<?=$jsJQ?>"></script>
    <script src="<?=$jsTrans?>"></script>
    <script src="<?=$jsProverka?>"></script>
    <script src="<?=$jsMain?>"></script>
    <script src="<?=$jsSlides?>"></script>
    <script src="<?=$jsUnslider?>"></script>
    <script src="<?=$jsSlick?>"></script>

</body>
</html>
<div class="ErrPM"><p><?php if(isset($s)){echo $s;}?></p></div>
<div class="accept">
    <p>Вы уверены, что хотите отправить заявку на покупку?</p><br>
    <span id="yes">Да</span><span id="no">Нет</span>
</div>
<script>
        // Функция для получения города по координатам
        function getCity(lat, lon) {
            $.ajax({
                url: `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lon}`,
                dataType: "json",
                success: function(data) {
                    const city = data.address.city || data.address.town || data.address.village || "Не удалось определить город";
                    $('#city').html(city);
                },
                error: function() {
                    $('#city').html("Ошибка при определении города");
                }
            });
        }

        // Проверяем, поддерживает ли браузер Geolocation API
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                const lat = position.coords.latitude;
                const lon = position.coords.longitude;
                getCity(lat, lon); // Определяем город по координатам
            }, function() {
                $('#city').html("Не удалось получить доступ к геолокации");
            });
        } else {
            $('#city').html("Ваш браузер не поддерживает геолокацию");
        }
    </script>