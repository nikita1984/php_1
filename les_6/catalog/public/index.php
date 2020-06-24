<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

if (get('page') === 'singlePage') {
    $contentArray = [
        'title' => 'singlePage',
        'template' => 'singlePage_main',
    ];
} elseif (get('page') === 'authentication') {
    $contentArray = [
        'title' => 'authentication',
        'template' => 'authentication',
    ];
} else {
    $contentArray = [
        'title' => 'catalog',
        'template' => 'catalog_content',
    ];
}

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (array_key_exists('add', $_POST)) {
        $index = post('add');
        if (is_null($_SESSION['cartData']) || !array_key_exists($index, $_SESSION['cartData'])) {
            $_SESSION['cartData'][$index] = $_SESSION['catalogData'][$index];
            $_SESSION['cartData'][$index]['qty'] = 1;
        } else {
            $_SESSION['cartData'][$index]['qty']++;
        }
    }

    if (array_key_exists('delete', $_POST)) {
        $index = post('delete');
        if ($_SESSION['cartData'][$index]['qty'] === 1) {
            unset($_SESSION['cartData'][$index]);
        } else {
            $_SESSION['cartData'][$index]['qty']--;
        }
    }

    if (array_key_exists('login', $_POST)) {
        $login = post('login');
        $password = post('password');
        // Возможно, что "соль" в  данном примере cо встроенным методом password_hash() является излишней,
        // однако реализовал её чтобы показать понимание урока
        $salt = '5@duh7';
        $passwordUpd = $password . $salt;
        $user = getUserByLogin($login);
        // Если пользователь был найден в БД и введённый им пароль совпадает с
        // хешированным в БД, то авторизуем пользователя, если нет то кидаем текст отказа в авторизации
        if ($user && password_verify($passwordUpd, $user['password'])) {
            // текущей сессии присваиваем идетификатор и имя, равные данным пользователя
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            redirect("index.php");
        } else {
            echo "Ошибка авторизации";
        }
    }
}

echo renderTemplate(LAYOUTS_DIR . 'main', [
    'title' => $contentArray['title'],
    'header' => renderTemplate(TEMPLATES_DIR . 'header'),
    'navigation' => renderTemplate(TEMPLATES_DIR . 'navigation'),
    'breadcrumbs' => renderTemplate(TEMPLATES_DIR . 'breadcrumbs'),
    'content' => renderTemplate(CONTENTS_DIR . $contentArray['template']),
    'subscribePanel' => renderTemplate(TEMPLATES_DIR . 'subscribePanel'),
    'footer' => renderTemplate(TEMPLATES_DIR . 'footer'),
    'footerSocial' => renderTemplate(TEMPLATES_DIR . 'footerSocial')
]);