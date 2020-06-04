<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файл с настройками шаблонов
require CONFIG_DIR . 'contentArray.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// todo Установить изменение параметра через метод GET

  $contentArray = $catalog;
#  $contentArray = $singlePage;

$title = $contentArray['title'];
$contentTemplate = $contentArray['template'];
$contentParams = array_map('getTemplateParams', $contentArray['params']);
echo renderPage($title, $contentTemplate, $contentParams);