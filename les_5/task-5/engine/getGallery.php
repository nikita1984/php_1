<?php
/** Возвращает массив с путем файлов галереи для вставки в HTML-код
 * @param $directoryPath - путь к папке с файлами изображений блока галереи
 * @return array массив с путем файлов галереи для вставки в HTML-код
 */
//function getGallery (string $directoryPath) : array {
//    $directoryList = [];
//    foreach (scandir($directoryPath) as $item) {
//        if (!is_dir($item)){
//            $file = [
//                "small" => getFilePath($item, 'small'),
//                "big" => getFilePath($item, 'big'),
//                "alt" => "$item",
//                "href" => str_replace('jpg', 'php', $item)
//            ];
//            $fileSizes = DOWNLOAD_FILE_SIZE;
//            if (isJPG($file["big"]) && lessThenSize($file["big"], $fileSizes)) {
//                array_push($directoryList, $file);
//            }
//        }
//    };
//    return $directoryList;
//};

function getGallery () {
    $host = '127.0.0.1:3306';
    $user = 'admin';
    $pwd = 'admin';
    $db = 'gallery';

    $link = mysqli_connect($host, $user, $pwd, $db);
    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    $sql = 'SELECT * from gallerytable';
    $result = mysqli_query($link, $sql);
    if (!$result){
        var_dump(mysqli_error($link));
        exit;
    }


    $final = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($final);
    mysqli_close($link);
    return $final;
}
