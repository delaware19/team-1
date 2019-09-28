<?php
$target_dir = "html/";
$target_file = $target_dir . basename($_FILES["doggo1.jpg"]["doggo1"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo "The file has been uploaded.";
?>