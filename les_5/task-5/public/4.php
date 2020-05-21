<?php
// Устанавливаем "строгий" режим
declare(strict_types = 1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

$host = '127.0.0.1:3306';
$SQLLogin = 'admin';
$pwd = 'admin';
$db = 'gallery';
$sql = 'SELECT * from gallerytable WHERE id = 4';
$gallery = getBigImage($host, $SQLLogin, $pwd, $db, $sql);
$imageFile = $gallery['name'];
// Отрисовываем страницу
echo renderImage($imageFile);


