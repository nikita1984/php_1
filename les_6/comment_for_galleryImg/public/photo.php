<?php
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

// При отправке комментария записываем его в целевой файл хранилища комментариев
if (!empty($_POST['commentText']) && is_string($_POST['commentText'])) {
    $writeString = $_POST['commentText'] . "<br>" . "\n";
    $filename = COMMENTS_IMAGES_DIR . "{$id}" . '.php';
    writeStringInFile($filename, $writeString);
}

echo renderImagePage($image['name'], $image['view'], $id);