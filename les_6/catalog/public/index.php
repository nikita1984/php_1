<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

$contentArray = [
    'leftSide' => [
        'catalog_leftSidePlus' => '',
        'leftSideOne' => 'catalog_leftSidePlus_One',
        'leftSideTwo' => 'catalog_leftSidePlus_Two',
        'leftSideThree' => 'catalog_leftSidePlus_Three',
    ],
    'topFilter' => 'catalog_topFilter',
    'sort' => 'catalog_sort',
    'catalog' => 'catalog_productCatalog',
    'featureBox' => 'catalog_featureBox'
];


function constructArray ($item) {
    if(is_array($item)) {
        // По названию ключа первого элемента массива определяем шаблон с логикой построения
        $page = array_keys($item)[0];
        // Удаляем первый элемент массива и конструируем составные части верхнеуровневого шаблона
        array_shift($item);
        $params = array_map('constructArray', $item);
        return renderContent($page, $params);
    } else {
        return renderTemplate(CONTENTS_DIR . "$item");
    }
}

$contentParams = array_map('constructArray', $contentArray);
$contentPage = 'catalog_content';
echo renderPage($contentPage, $contentParams);