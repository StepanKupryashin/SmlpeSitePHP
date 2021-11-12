<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli();
$mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
$mysqli->real_connect("localhost", "root", "", "users");

// $result = $mysqli->query("SELECT * FROM users");
// $row = $result->fetch_assoc();






function check_password($password, $login) {
    $mysqli = new mysqli();
    $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
    $mysqli->real_connect('localhost', 'root', '', 'users');
    $result = $mysqli->query("SELECT password FROM users WHERE login = '".$login."'");
    $row = $result->fetch_assoc();
    if ($row['password'] == $password) {
        return 'true';
    }
    else {
        return 'false';
    };
};



function register_user($login = null, $email = null, $password = null)
{
    $mysqli = new mysqli();
    $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
    $mysqli->real_connect('localhost', 'root', '', 'users');
    
    $password = md5($password);

    $result = $mysqli->query("INSERT INTO `users`(`login`, `email`, `password`) VALUES ('$login','$email','$password')");
    return 200;
}


function get_complete_applications() {

    $mysqli = new mysqli();
    $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
    $mysqli->real_connect('localhost', 'root', '', 'applications');

    $result = $mysqli->query("SELECT * FROM applications WHERE status = 'Решена'");
    $row = $result->fetch_all();
    return $row;

}


// echo register_user('test', 'test@mail.ru', 'test123');

?>