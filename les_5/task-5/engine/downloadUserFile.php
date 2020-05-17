<?php
/**
 * Производит проверку на соответствие требованиям к загружаемому файлу,
 * в случае успеха генерирует файлы для отображения в галерее из загружаемого пользователем
 * и обновляет страницу, кидает ошибку или обновляет страницу при отказе
 * @return false - в случае несоответсвия загружаемого файла установленным требованиям
 *  */
function downLoadUserFile () {
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_FILES['my_file'])) {
            if(!file_exists(BIG_IMAGES_DIR)) {
                mkdir(BIG_IMAGES_DIR);
            }
            $file = $_FILES['my_file']['tmp_name'];
            if (file_exists($file)) {
                if ((isJPG($file) && lessThenSize($file, DOWNLOAD_FILE_SIZE))) {
                    getGalleryImage ($file);
                } else {
                    return false;
                }
            } else {
                // в случае отправки пустого содержания производим перезагрузку страницы
                header("Location: /les_5/task-5/public/");
            }
        }
    }
}