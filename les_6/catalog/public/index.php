<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

$contentArray = [
    'leftSide' => renderTemplate(CONTENTS_DIR . 'catalog_leftSide'),
    'topFilter' => renderTemplate(CONTENTS_DIR . 'catalog_topFilter'),
    'sort' => renderTemplate(CONTENTS_DIR . 'catalog_sort'),
    'catalog' => renderTemplate(CONTENTS_DIR . 'catalog_productCatalog'),
    'featureBox' => renderTemplate(CONTENTS_DIR . 'catalog_featureBox')
];

echo renderPage($contentArray);