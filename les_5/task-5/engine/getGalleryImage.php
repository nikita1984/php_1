<?php
/** Генерирует миниатюру и файл с изображением, идентичный исходному,
 * затем обновляет страницу
 * @param $file - исходный файл для загрузки и генерации файлов с миниатюрой и оригинальным изображением
 */
function getGalleryImage (string $file) {
    $uploadFile = $_FILES['my_file']['name'];
    $src = BIG_IMAGES_DIR . $uploadFile;
    move_uploaded_file(
        $file,
        $src
    );
    $dest = IMAGES_DIR . $uploadFile;
    $width = 108;
    $height = 158;
    img_resize($src, $dest, $width, $height, $rgb = 0xFFFFFF, $quality = 100);
    //ToDO: Реализовать добавление в БД параметров нового файла
    header("Location: /les_5/task-5/public/");
}

