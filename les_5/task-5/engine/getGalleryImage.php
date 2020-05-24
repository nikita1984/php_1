<?php
/** Генерирует миниатюру и файл с изображением, идентичный исходному,
 * затем обновляет страницу
 * @param $file - исходный файл для загрузки и генерации файлов с миниатюрой и оригинальным изображением
 */
function getDownloadImage (string $file) {
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

    $bigImagePath = './images/big/' . $uploadFile;
    $bigImagePath = mysqli_real_escape_string(getConnection (), $bigImagePath);
    $smallImagePath = './images/small/' . $uploadFile;
    $smallImagePath = mysqli_real_escape_string(getConnection (), $smallImagePath);
    $size = filesize($src); // size

    $sql = "INSERT INTO gallerytable
(name, bigImagePath, smallImagePath, size, view)
VALUES
('$uploadFile', 
'$bigImagePath', 
'$smallImagePath', 
$size, 
0)";
    SQLQuery($sql);
}

