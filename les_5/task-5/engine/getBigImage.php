<?php
/** Возвращает массив с параметром крупного изображения галереи для вставки в HTML-код
 * и отправляем запрос на увеличение счётчика просмотров
 * @param $host - адрес хоста на котором расположена БД
 * @param $login - логин, под которым заходим в БД
 * @param  $pwd - пароль к логину, под которым заходим в БД
 * @param $db - наименование БД к которой будет происходить SQL-запрос
 * @param $sql - SQL-запрос
 * @return array массив с параметрами галереи для вставки в HTML-код
 */
function getBigImage (string $host, string $login, string $pwd, string $db, string $sql) {

    $link = mysqli_connect($host, $login, $pwd, $db);
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $result = mysqli_query($link, $sql);
    if (!$result){
        var_dump(mysqli_error($link));
        exit;
    }

    $output = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // Отправляем запрос в БД на увеличение счетчика просмотров
    $imageView = (int) $output['view'] + 1;
    $id = (int) $output['id'];
    if ($imageView = (int) $imageView) {
        $sql = "UPDATE gallerytable SET view = $imageView WHERE id = $id ";
        mysqli_query($link, $sql);
    }

    mysqli_close($link);

    return $output;
}
