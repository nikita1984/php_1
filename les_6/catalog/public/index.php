<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

$contentArrayExt = [
    'leftSide' => renderTemplate(CONTENTS_DIR . 'catalog_leftSide'),
    'topFilter' => renderTemplate(CONTENTS_DIR . 'catalog_topFilter'),
    'sort' => renderTemplate(CONTENTS_DIR . 'catalog_sort'),
    'catalog' => renderTemplate(CONTENTS_DIR . 'catalog_productCatalog'),
    'featureBox' => renderTemplate(CONTENTS_DIR . 'catalog_featureBox')
];

$contentArray = [
    'leftSide' => 'catalog_leftSide',
    'topFilter' => 'catalog_topFilter',
    'sort' => 'catalog_sort',
    'catalog' => 'catalog_productCatalog',
    'featureBox' => 'catalog_featureBox'
];


function constructArray ($item) {
    return renderTemplate(CONTENTS_DIR . "$item");
}

$contentArrayUpd = array_map('constructArray', $contentArray);
$contentPage = 'catalog_content';
echo renderPage($contentPage, $contentArrayUpd);