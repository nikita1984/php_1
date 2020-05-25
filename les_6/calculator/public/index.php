<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// Прописываем механизм логики при загрузке файла
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'действие произведено';
} else {
    echo renderPage();
}





