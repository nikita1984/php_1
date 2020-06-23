<?php
//function redirect(string $url): void
//{
//    header("Location: {$url}");
//    exit;
//}

function get($name) {
    return $_GET[$name];
}

function post($name) {
    return $_POST[$name];
}

function getHash($string) {
    return md5($string . "d5f8");
}

//function verifyPwd($string) {
//    $pass = $string; // qwerty, userPass, admin
//    // Полагаю, что соль в данном примере является излишней, однако реализовал её чтобы показать понимание урока
//    $salt = '5@duh7';
//    $passUpd = $pass . $salt;
//
//    $sql = 'SELECT * FROM shopUsers';
//    $catalogData = SQLQuery($sql, 'All');
//
//    $dbPass = password_hash($passUpd, PASSWORD_BCRYPT);
//    var_dump($userPass);
//
//    var_dump(password_verify ($passUpd , $dbPass));
//}