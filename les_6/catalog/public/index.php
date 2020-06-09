<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

if($_GET['page'] == 'singlePage') {
    $contentArray = [
        'title' => 'singlePage',
        'template' => 'singlePage_main',
        'params' => [
            'imgPanel' => renderTemplate(CONTENTS_DIR . 'singlePage_imgPanel'),
            'description' => renderTemplate(CONTENTS_DIR . 'singlePage_description'),
            'likeAlso' => renderTemplate(CONTENTS_DIR . 'singlePage_likeAlso'),
        ]
    ];
} else {
    $contentArray = [
        'title' => 'catalog',
        'template' => 'catalog_content',
        'params' => [
            'leftSide' => renderTemplate(CONTENTS_DIR . 'catalog_leftSide'), // renderTemplate(CONTENTS_DIR . $contentTemplate
            'topFilter' => renderTemplate(CONTENTS_DIR .'catalog_topFilter'),
            'sort' => renderTemplate(CONTENTS_DIR . 'catalog_sort'),
            'catalog' => renderTemplate(CONTENTS_DIR . 'catalog_productCatalog'),
            'catalogBottom' => renderTemplate(CONTENTS_DIR . 'catalog_catalogBottom'),
            'featureBox' => renderTemplate(CONTENTS_DIR . 'catalog_featureBox')
        ]
    ];
}

echo renderTemplate(LAYOUTS_DIR . 'main', [
    'title' => $contentArray['title'],
    'header' => renderTemplate(TEMPLATES_DIR . 'header'),
    'navigation' => renderTemplate(TEMPLATES_DIR . 'navigation'),
    'breadcrumbs' => renderTemplate(TEMPLATES_DIR . 'breadcrumbs'),
    'content' =>  renderTemplate(CONTENTS_DIR . $contentArray['template'], $contentArray['params']),
    'subscribePanel' => renderTemplate(TEMPLATES_DIR . 'subscribePanel'),
    'footer' => renderTemplate(TEMPLATES_DIR . 'footer'),
    'footerSocial' => renderTemplate(TEMPLATES_DIR . 'footerSocial')
]);