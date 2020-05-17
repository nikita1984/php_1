<?php
// Устанавливаем "строгий" режим
declare(strict_types = 1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

$width = 108;
$height = 158;
$src = IMAGES_DIR . "./../" . "1.jpg";
$dest = IMAGES_DIR . "./../big/" . "1plus.jpg";
img_resize($src, $dest, $width, $height, $rgb = 0xFFFFFF, $quality = 100);
var_dump(img_resize($src, $dest, $width, $height, $rgb = 0xFFFFFF, $quality = 100));

// Отрисовываем страницу
echo render();



