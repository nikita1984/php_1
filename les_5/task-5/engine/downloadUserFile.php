<?php
function downLoadUserFile (){
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_FILES['my_file'])) {
            if(!file_exists(IMAGES_DIR)) {
                mkdir(IMAGES_DIR);
            }
            $file = $_FILES['my_file']['tmp_name'];
            if (file_exists($file)) {
                if ((isJPG($file) && lessThenSize($file, DOWNLOAD_FILE_SIZE))) {
                    move_uploaded_file(
                        $file,
                        IMAGES_DIR . $_FILES['my_file']['name']
                    );
                    header("Location: /les_5/task-5/public/");
                } else {
                    return false;
                }
            } else {
                header("Location: /les_5/task-5/public/");
            }
        }
    }
}