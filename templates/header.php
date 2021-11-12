<? session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/index.css?<?php echo time() ?>">
    <title><?php if (array_key_exists('title', $_SESSION))
     { 
        echo $_SESSION['title']; 
     }
      else { echo $title; 
      };?></title>
</head>
<body>

    <div class="header">
        <div class="logo"></div>


        <button onclick='window.location = "<? if (array_key_exists("user", $_SESSION)) { echo "/user_cabinet.php"; } else { echo "/login.php";}?>"'><? if  (array_key_exists("user", $_SESSION)) { echo "Личный кабинет\n" .$_SESSION['user']; } else { echo "Войти"; } ?></button>
        <button onclick='window.location = "<? if (array_key_exists("user", $_SESSION)) { echo "/logout.php"; } else { echo "/reg_user.php";}?>"'><? if (array_key_exists('user', $_SESSION)) {echo "Выйти";} else { echo "Регистрация";}?></button>
    </div>
