<?php
session_start();
require_once "./db.php";

$login = $_POST['login'];

$password = md5($_POST['password']);



$check = check_password($password, $login);



if ($check == "true") {
    $_SESSION['user'] = $login;
    header("Location: /");
    exit;
}

else {
    $_SESSION['login_msg'] = 'Ошибка входа';
    header('Location: /login.php');
    exit;
}




// if ($password_confirm == $password) {
//         register_user($login, $email, $password);
//         $_SESSION['register_msg'] = 'Пользователь зарегистрирован';
//         header('Location: /');
//         exit;

// } else {
//     $_SESSION['register_msg'] = 'Пароли не совпадают';
//     header('Location: /');
//     exit;
// };


?>