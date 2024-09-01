<?php
require_once "functions.php";
$query = "SELECT * FROM `automobiles`";
$query2 = "SELECT * FROM `peredacha`";
$query3 = "SELECT * FROM `years`";
$query4 = "SELECT * FROM `dvigatel`";
$query5 = "SELECT * FROM `power`";
$query6 = "SELECT * FROM `privod`";
$query7 = "SELECT * FROM `color`";
$query8 = "SELECT * FROM `probeg`";
$query9 = "SELECT * FROM `rule`";
$query10 = "SELECT * FROM `pokolenie`";

if (isset($_GET["automobiles"])){
    switch ($_GET["automobiles"]) {
        case 0:
            $query = "SELECT * FROM `automobiles`";
            break;
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Kaiyi E5'";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'BMW X4'";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'BMW X7'";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Hyundai Sonata'";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Mercedes-Benz GLE'";
            break;
        case 6:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Volkswagen Caravelle'";
            break;
        case 7:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Honda Accord'";
            break;
        case 8:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Kia Carnival'";
            break;
        case 9:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Toyota Land Cruiser Prado'";
            break;
        case 10:
            $query = "SELECT * FROM `automobiles` WHERE `name` = 'Toyota RAV4'";
            break;
    }
}
if (isset($_GET["kpp"])){
    switch ($_GET["kpp"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_peredacha` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_peredacha` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_peredacha` = 3";
            break;
    }
}
if (isset($_GET["years"])){
    switch ($_GET["years"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 3";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 4";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 5";
            break;
        case 6:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 6";
            break;
        case 7:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 7";
            break;
        case 8:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 8";
            break;
        case 9:
            $query = "SELECT * FROM `automobiles` WHERE `id_years` = 9";
            break;
    }
}
if (isset($_GET["dvigatel"])){
    switch ($_GET["dvigatel"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 3";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 4";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 5";
            break;
        case 6:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 6";
            break;
        case 7:
            $query = "SELECT * FROM `automobiles` WHERE `id_dvigatel` = 7";
            break;
    }
}
if (isset($_GET["power"])){
    switch ($_GET["power"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 3";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 4";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 5";
            break;
        case 6:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 6";
            break;
        case 7:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 7";
            break;
        case 8:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 8";
            break;
        case 9:
            $query = "SELECT * FROM `automobiles` WHERE `id_power` = 9";
            break;
    }
}
if (isset($_GET["privod"])){
    switch ($_GET["privod"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_privod` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_privod` = 2";
            break;
    }
}
if (isset($_GET["color"])){
    switch ($_GET["color"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_color` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_color` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_color` = 3";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `id_color` = 4";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `id_color` = 5";
            break;
    }
}
if (isset($_GET["probeg"])){
    switch ($_GET["probeg"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 3";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 4";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 5";
            break;
        case 6:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 6";
            break;
        case 7:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 7";
            break;
        case 8:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 8";
            break;
        case 9:
            $query = "SELECT * FROM `automobiles` WHERE `id_probeg` = 9";
            break;
    }
}
if (isset($_GET["rule"])){
    switch ($_GET["rule"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_storona_rulya` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_storona_rulya` = 2";
            break;
    }
}
if (isset($_GET["pokolenie"])){
    switch ($_GET["pokolenie"]) {
        case 1:
            $query = "SELECT * FROM `automobiles` WHERE `id_pokolenie` = 1";
            break;
        case 2:
            $query = "SELECT * FROM `automobiles` WHERE `id_pokolenie` = 2";
            break;
        case 3:
            $query = "SELECT * FROM `automobiles` WHERE `id_pokolenie` = 3";
            break;
        case 4:
            $query = "SELECT * FROM `automobiles` WHERE `id_pokolenie` = 4";
            break;
        case 5:
            $query = "SELECT * FROM `automobiles` WHERE `id_pokolenie` = 5";
            break;
        case 6:
            $query = "SELECT * FROM `automobiles` WHERE `id_pokolenie` = 6";
            break;
    }
}
$rezult = mysqli_query($link,$query);
$rezult2 = mysqli_query($link,$query2);
$rezult3 = mysqli_query($link,$query3);
$rezult4 = mysqli_query($link,$query4);
$rezult5 = mysqli_query($link,$query5);
$rezult6 = mysqli_query($link,$query6);
$rezult7 = mysqli_query($link,$query7);
$rezult8 = mysqli_query($link,$query8);
$rezult9 = mysqli_query($link,$query9);
$rezult10 = mysqli_query($link,$query10);
$name = [];
$kpp = [];
$year = [];
$dvigatel = [];
$power = [];
$privod = [];
$color = [];
$probeg = [];
$rule = [];
$pokolenie = [];
while ($auto = mysqli_fetch_assoc($rezult)) {
    $name[] = $auto;
}
while ($kpp2 = mysqli_fetch_assoc($rezult2)) {
    $kpp[] = $kpp2;
}
while ($year2 = mysqli_fetch_assoc($rezult3)) {
    $year[] = $year2;
}
while ($dvigatel2 = mysqli_fetch_assoc($rezult4)) {
    $dvigatel[] = $dvigatel2;
}
while ($power2 = mysqli_fetch_assoc($rezult5)) {
    $power[] = $power2;
}
while ($privod2 = mysqli_fetch_assoc($rezult6)) {
    $privod[] = $privod2;
}
while ($color2 = mysqli_fetch_assoc($rezult7)) {
    $color[] = $color2;
}
while ($probeg2 = mysqli_fetch_assoc($rezult8)) {
    $probeg[] = $probeg2;
}
while ($rule2 = mysqli_fetch_assoc($rezult9)) {
    $rule[] = $rule2;
}
while ($pokolenie2 = mysqli_fetch_assoc($rezult10)) {
    $pokolenie[] = $pokolenie2;
}
include_once 'automob.php';