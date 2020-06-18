<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

if($_GET['page'] == 'singlePage') {
    $contentArray = [
        'title' => 'singlePage',
        'template' => 'singlePage_main',
    ];
} else {
    $contentArray = [
        'title' => 'catalog',
        'template' => 'catalog_content',
    ];
}

session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST['id']);

    $index = (int) $_POST['id'] - 1;
    if (is_null($_SESSION['cartData']) || !array_key_exists($index, $_SESSION['cartData'])) {
        $_SESSION['cartData'][$index] = $_SESSION['catalogData'][$index];
        $_SESSION['cartData'][$index]['qty'] = 1;
    } else {
        $_SESSION['cartData'][$index]['qty'] ++;
    }
}

echo renderTemplate(LAYOUTS_DIR . 'main', [
    'title' => $contentArray['title'],
    'header' => renderTemplate(TEMPLATES_DIR . 'header'),
    'navigation' => renderTemplate(TEMPLATES_DIR . 'navigation'),
    'breadcrumbs' => renderTemplate(TEMPLATES_DIR . 'breadcrumbs'),
    'content' =>  renderTemplate(CONTENTS_DIR . $contentArray['template']),
    'subscribePanel' => renderTemplate(TEMPLATES_DIR . 'subscribePanel'),
    'footer' => renderTemplate(TEMPLATES_DIR . 'footer'),
    'footerSocial' => renderTemplate(TEMPLATES_DIR . 'footerSocial')
]);