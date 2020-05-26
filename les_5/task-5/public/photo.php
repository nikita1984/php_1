<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);

// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// В зависимости от переданного запроса на страницу определяем параметры для функции отрисовки страницы
$id = (int)$_GET['id'];
if ($id = (int)$_GET['id']) {
    $sql = "UPDATE gallerytable SET view = view + 1 WHERE id = {$id}";
    SQLQuery($sql);
    $sql = "SELECT * from gallerytable WHERE id = {$id}";
    $image = SQLQuery($sql, 'Array');
    closeConnection();
}

// Отрисовываем страницу
echo renderImagePage($image['name'], $image['view']);
