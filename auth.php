<?php
session_start();

const ADMIN_EMAIL = 'admin@admin.com';
const ADMIN_PASSWORD = '1111';
$_SESSION['auth'] = false;

if($_POST['login'] == ADMIN_EMAIL && $_POST['password'] == ADMIN_PASSWORD){
    $_SESSION['auth'] = true;
} else {
    header('Location: index.php');
    exit();
}

header('Location: adduser.php');
?>