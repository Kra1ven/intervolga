<?php
    $upload_dir = "./upload/";
    if(!is_dir($upload_dir)){
        mkdir($upload_dir);
    }

    if(isset($_POST['csv_upload'])){
    $upload_file = new SplFileObject($_FILES['csv_userfile']['tmp_name']);
    $upload_file->setFlags(SplFileObject::READ_CSV);

        foreach ($upload_file as $row) {
            list($file_name, $file_data) = $row;

            if(preg_match('/([a-zA-Z0-9\s_\\.\-\(\):])+(.txt|.log|.html)$/', $file_name)){
                file_put_contents($upload_dir.$file_name, $file_data);
            }
        }
    }
?>