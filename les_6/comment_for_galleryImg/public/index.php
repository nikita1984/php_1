<?php
// Подключаем файл с константами и настройками конфигурации
require __DIR__ . '\..\config\main.php';

// Подключаем файлы с функциями
requireFunctions(scandir(ENGINE_DIR));

// Прописываем механизм логики при загрузке файла
if (isset($_FILES['my_file'])) {
    $file = $_FILES['my_file']['tmp_name'];
    if (file_exists($file)) {
        if ((isJPG($file) && lessThenSize($file, DOWNLOAD_FILE_SIZE))) {
            getDownloadImage($file);
            header("Location: /les_5/task-5/public/");
        } else {
            printError ();
            //ToDo: реализовать корректный редирект страницы header("Location: /les_5/task-5/public/");
        }
    } else {
        header("Location: /les_6/comment_for_galleryImg/public/");
    }
} else {
    echo renderGalleryPage();
}





