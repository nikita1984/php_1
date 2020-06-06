<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// Прописываем механизм логики при загрузке файла
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $result = mathOperation(
        (int) $_POST['arg1'],
        (int) $_POST['arg2'],
        (string) $_POST['operation']);
    $resultText = 'Результат операции: ' . $result;
    echo renderPage($resultText);
} else {
    // При отсутствии запросов просто отрисовываем страницу
    echo renderPage();
}





