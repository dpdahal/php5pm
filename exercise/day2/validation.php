<?php
session_start();

if (!empty($_POST)) {
    $userName = $_POST['username'];
    $password = $_POST['password'];

    if ($userName === 'admin' && $password === 'admin002') {
        $_SESSION['username'] = $userName;
        header('Location:welcome.php');

    } else {
        $_SESSION['error'] = "Username & password not match";
        header('Location:index.php');
    }


} else {
    $_SESSION['error'] = "Invalid access";
    header("Location:index.php");
}