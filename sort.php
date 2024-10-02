<?php
require_once "functions.php";

function getUniqueValues($link, $column, $table) {
	$sql = "
	SELECT DISTINCT $column
	FROM $table
	";
	$result = mysqli_query($link, $sql);
	if (!$result) {
			die("Ошибка выполнения запроса: " . mysqli_error($link));
	}

	$values = [];
	while ($row = mysqli_fetch_assoc($result)) {
			$values[] = $row[$column];
	}

	return array_unique($values);
}

function getIdValueMapping($link, $valueColumn, $idColumn, $table) {
	$sql = "
	SELECT $idColumn, $valueColumn
	FROM $table
	";
	$result = mysqli_query($link, $sql);
	if (!$result) {
			die("Ошибка выполнения запроса: " . mysqli_error($link));
	}

	$mapping = [];
	while ($row = mysqli_fetch_assoc($result)) {
			$mapping[$row[$idColumn]] = $row[$valueColumn];
	}

	return $mapping;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$filters = [
		'name' => isset($_GET['name']) ? mysqli_real_escape_string($link, $_GET['name']) : '',
		'peredacha_id' => isset($_GET['peredacha_id']) ? mysqli_real_escape_string($link, $_GET['peredacha_id']) : '',
		'dvigatel_id' => isset($_GET['dvigatel_id']) ? mysqli_real_escape_string($link, $_GET['dvigatel_id']) : '',
		'privod_id' => isset($_GET['privod_id']) ? mysqli_real_escape_string($link, $_GET['privod_id']) : '',
		'color_id' => isset($_GET['color_id']) ? mysqli_real_escape_string($link, $_GET['color_id']) : '',
		'rule_id' => isset($_GET['rule_id']) ? mysqli_real_escape_string($link, $_GET['rule_id']) : '',
		'price_min' => isset($_GET['price_min']) ? mysqli_real_escape_string($link, $_GET['price_min']) : '',
    'price_max' => isset($_GET['price_max']) ? mysqli_real_escape_string($link, $_GET['price_max']) : '',
    'year_min' => isset($_GET['year_min']) ? mysqli_real_escape_string($link, $_GET['year_min']) : '',
    'year_max' => isset($_GET['year_max']) ? mysqli_real_escape_string($link, $_GET['year_max']) : '',
    'power_min' => isset($_GET['power_min']) ? mysqli_real_escape_string($link, $_GET['power_min']) : '',
    'power_max' => isset($_GET['power_max']) ? mysqli_real_escape_string($link, $_GET['power_max']) : '',
    'probeg_min' => isset($_GET['probeg_min']) ? mysqli_real_escape_string($link, $_GET['probeg_min']) : '',
    'probeg_max' => isset($_GET['probeg_max']) ? mysqli_real_escape_string($link, $_GET['probeg_max']) : '',
		'pokolenie_min' => isset($_GET['pokolenie_min']) ? mysqli_real_escape_string($link, $_GET['pokolenie_min']) : '',
    'pokolenie_max' => isset($_GET['pokolenie_max']) ? mysqli_real_escape_string($link, $_GET['pokolenie_max']) : '',
];


	// Получаем уникальные значения и сопоставление ID
	$carsNames = getUniqueValues($link, 'name', 'automobiles');
	$carsPeredacha = getIdValueMapping($link, 'type_', 'id', 'peredacha');
	$carsYears = getIdValueMapping($link, 'year', 'id', 'years');
	$carsDvigatel = getIdValueMapping($link, 'type', 'id', 'dvigatel');
	$carsPower = getIdValueMapping($link, 'power', 'id', 'power');
	$carsPrivod = getIdValueMapping($link, 'type', 'id', 'privod');
	$carsColor = getIdValueMapping($link, 'type', 'id', 'color');
	$carsProbeg = getIdValueMapping($link, 'kolvo', 'id', 'probeg');
	$carsStorona_r = getIdValueMapping($link, 'type', 'id', 'rule');
	$carsPokolenie = getIdValueMapping($link, 'num', 'id', 'pokolenie');
	$carsPrice = getUniqueValues($link, 'price', 'automobiles');

	$conditions = [];
    
    if ($filters['name']) {
        $conditions[] = "name LIKE '%{$filters['name']}%'";
    }
    if ($filters['peredacha_id']) {
        $conditions[] = "id_peredacha='{$filters['peredacha_id']}'";
    }
    // Условия для года
    if ($filters['year_min']) {
			$conditions[] = "y.year >= '{$filters['year_min']}'";
		}
		if ($filters['year_max']) {
			$conditions[] = "y.year <= '{$filters['year_max']}'";
		}
    if ($filters['dvigatel_id']) {
        $conditions[] = "id_dvigatel='{$filters['dvigatel_id']}'";
    }
    // Условия для мощности
    if ($filters['power_min']) {
			$conditions[] = "pow.power >= '{$filters['power_min']}'";
		}
		if ($filters['power_max']) {
			$conditions[] = "pow.power <= '{$filters['power_max']}'";
		}
    if ($filters['privod_id']) {
        $conditions[] = "id_privod='{$filters['privod_id']}'";
    }
    if ($filters['color_id']) {
        $conditions[] = "id_color='{$filters['color_id']}'";
    }
    // Условия для пробега
    if ($filters['probeg_min']) {
			$conditions[] = "prob.kolvo >= '{$filters['probeg_min']}'";
		}
		if ($filters['probeg_max']) {
			$conditions[] = "prob.kolvo <= '{$filters['probeg_max']}'";
		}
    if ($filters['rule_id']) {
        $conditions[] = "id_storona_rulya='{$filters['rule_id']}'";
    }
    // Условия для поколения
    if ($filters['pokolenie_min']) {
			$conditions[] = "pok.num >= '{$filters['pokolenie_min']}'";
		}
		if ($filters['pokolenie_max']) {
			$conditions[] = "pok.num <= '{$filters['pokolenie_max']}'";
		}
    // Условия для цены
    if ($filters['price_min']) {
			$conditions[] = "price >= '{$filters['price_min']}'";
		}
		if ($filters['price_max']) {
			$conditions[] = "price <= '{$filters['price_max']}'";
		}

	$sql = "
	SELECT a.*, p.type_ AS peredacha_name, y.year AS year, d.type AS dvigatel_name, pow.power AS power_num, 
	pr.type AS privod_name, c.type AS color_name, prob.kolvo AS probeg_num, sr.type AS storona, pok.num AS pokolenie_num
	FROM automobiles a 
	LEFT JOIN peredacha p ON a.id_peredacha = p.id
	LEFT JOIN years y ON a.id_years = y.id
	LEFT JOIN dvigatel d ON a.id_dvigatel = d.id
	LEFT JOIN power pow ON a.id_power = pow.id
	LEFT JOIN privod pr ON a.id_privod = pr.id
	LEFT JOIN color c ON a.id_color = c.id
	LEFT JOIN probeg prob ON a.id_probeg = prob.id
	LEFT JOIN rule sr ON a.id_storona_rulya = sr.id
	LEFT JOIN pokolenie pok ON a.id_pokolenie = pok.id
	";
	
	if (!empty($conditions)) {
			$sql .= " WHERE " . implode(' AND ', $conditions);
	}

	$result = mysqli_query($link, $sql);
}


include_once 'automob.php';