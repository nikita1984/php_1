<?php
// 3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов
// из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область:
// … (названия городов можно найти на maps.yandex.r

/* Решение */
// Построим простейший массив
$array = [
    'Московская область'  => ['Москва, Зеленоград, Клин'],
    'Ленинградская область'  => ['Санкт-Петербург, Всеволожск, Павловск, Кронштадт'],
    'Рязанская область'  => ['Рязань, Касимов, Скопин']
];


// Выводим в цикле значения массива
if (is_array($array)) {
    foreach ($array as $key => $city) {
        echo "{$key}: <br>";
        if (is_array($array)) {
            foreach ($city as $value) {
                echo $value;
            };
            echo "<br>";
        }
    };
}
