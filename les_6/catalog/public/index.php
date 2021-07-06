<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файл с настройками шаблонов
require CONFIG_DIR . 'contentArray.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

if($_GET['page'] == 'singlePage') {
    $contentArray = $singlePage;
} else {
    $contentArray = $catalog;
}

$contentParams = array_map('getTemplateParams', $contentArray['params']);
echo renderPage( $contentArray['title'], $contentArray['template'], $contentParams);