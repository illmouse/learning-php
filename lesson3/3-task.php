<?php

$area = [
	"Московская область" => ["Москва", "Зеленоград", "Клин"],
	"Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
	"Рязанская область" => ["Город1", "Город2", "Город3",]
];

foreach ($area as $key => $val) {
	echo "<br>$key:<br>";
	foreach ($val as $int_val) {
		echo "$int_val, ";
	}
}

?>