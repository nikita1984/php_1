<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// Подключаем файл с настройками шаблонов
require CONFIG_DIR . 'contentArray.php';

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
    $contentArray = $catalog;
}

// $contentParams = array_map('getTemplateParams', $contentArray['params']);
echo renderPage( $contentArray['title'], $contentArray['template'], $contentArray['params']);