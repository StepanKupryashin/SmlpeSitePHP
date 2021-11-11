<?php
session_start();
require_once "./db.php";

$login = $_POST['login'];

$password = $_POST['password'];

$email = $_POST['email'];

$password_confirm = $_POST['password_check'];

if ($password_confirm == $password) {
        register_user($login, $email, $password);
        $_SESSION['register_msg'] = 'Пользователь зарегистрирован';
        header('Location: /');
        exit;

} else {
    $_SESSION['register_msg'] = 'Пароли не совпадают';
    header('Location: /');
    exit;
};


?>