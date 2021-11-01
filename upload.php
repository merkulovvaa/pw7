<?php
ini_set('display_errors', 'Off');

$target_dir = "c:/xampp/htdocs/public/images/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$isUploaded = false;
$filePath = '';
if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
    $filePath = $target_dir . basename($_FILES["photo"]["name"]);
    $isUploaded = true;
}
