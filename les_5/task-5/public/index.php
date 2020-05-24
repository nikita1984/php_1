<?php
// Устанавливаем "строгий" режим
declare(strict_types = 1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// Механизм логики при загрузке файла
downLoadUserFile ();

// В случае несоответствия требования к загружаемому файлу, формируем переменную с текстом ошибки
if (!downLoadUserFile()  && !is_null(downLoadUserFile())){
    $fileSize = DOWNLOAD_FILE_SIZE;
    $errorText = "Не соблюдены требования к загружаемому файлу: Разрешение jpeg, размер не более {$fileSize} kB";
} else {
    $errorText = "";
}
$uploadFormTitle = "Загрузка файлов";
echo renderGalleryPage($uploadFormTitle, $errorText);



