<?php
// Устанавливаем "строгий" режим
declare(strict_types=1);
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// Прописываем механизм логики при загрузке файла
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['my_file'])) {
        if (!file_exists(BIG_IMAGES_DIR)) {
            mkdir(BIG_IMAGES_DIR);
        }
        $file = $_FILES['my_file']['tmp_name'];
        if (file_exists($file)) {
            if ((isJPG($file) && lessThenSize($file, DOWNLOAD_FILE_SIZE))) {
                getDownloadImage($file);
                header("Location: /les_5/task-5/public/");
            } else {
                $fileSize = DOWNLOAD_FILE_SIZE;
                $errorText = "Не соблюдены требования к загружаемому файлу: 
                                Разрешение jpeg, размер не более {$fileSize} kB";
                echo renderGalleryPage($errorText);
                //ToDo: реализовать корректный редирект страницы header("Location: /les_5/task-5/public/");
            }
        } else {
            header("Location: /les_5/task-5/public/");
        }
    }
} else {
    echo renderGalleryPage();
}





