<?php
// Устанавливаем "строгий" режим
declare(strict_types = 1);

// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// В зависимости от переданного запроса на страницу определяем параметры для функции отрисовки страницы
$id = (int) $_GET['id'];
if ($id = (int) $_GET['id']) {
    $sql = "SELECT * from gallerytable WHERE id = $id";
}
$gallery = getBigImage(SQL_HOST, SQL_LOGIN, SQL_PWD, SQL_DB, $sql);
$imageFile = $gallery['name'];
$imageView = (int) $gallery['view'] + 1;

// Отрисовываем страницу
echo renderImagePage($imageFile, $imageView);