<?php
$file='/home/rguktrkvalley/Downloads/Sea Food.jfif';
if(file_exists($file)){
    header('Content-Type:application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Content-Length: ' . filesize($file));

    readfile($file);
    exit;
}
else{
    echo "The file doesnot exist";
}

?>