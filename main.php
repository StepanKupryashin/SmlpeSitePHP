<?php session_start(); 
    $title = 'Home Page';
?>
<?php include "templates/header.php"?>

<!-- <h2>MAIN</h2> -->

<?php
if (array_key_exists('user', $_SESSION)) {
    echo "Добро пожаловать " . $_SESSION['user'];
}
?>

<!-- ФОРМА Регистрации -->
 <form action="/reg.php" method="post" class='form-register'>
     <label>Логин</label>
     <input type="text" name="login">

     <label>E-mail</label>
     <input type="email" name="email">

     <label>Пароль</label>
     <input type="password" name="password">

     <label>Подтвердите пароль</label>
     <input type="password" name="password_check">
    
    <button type='submit'>Зарегистрироваться</button>
 </form>
 <button onclick='window.location = "/login.php"'>Войти</button>

 <?php

 if (array_key_exists('register_msg', $_SESSION)) {
    echo $_SESSION['register_msg'];
    unset($_SESSION['register_msg']);
    
 }

 ?>

<? include "templates/footer.php"?>