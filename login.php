<?php
include_once("./db.php");
$title = 'Login Page';
include "templates/header.php";

?>

<form action="/login_user.php" method="post" class='form-register'>
    <label>Login</label>
    <input type="text" name="login">
    <label>Password</label>
    <input type="password" name="password">

    <button type="submit">Log In</button>

</form>
<?php
if (array_key_exists('login_msg', $_SESSION)) {
    echo $_SESSION['login_msg'];
}
?>


<?php

include "./templates/footer.php";

?>