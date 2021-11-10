<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = new mysqli();
$mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
$mysqli->real_connect("localhost", "root", "", "users");

$result = $mysqli->query("SELECT password FROM users WHERE id = 1");
$row = $result->fetch_assoc();

printf("password = %s (%s)\n", $row['password'], gettype($row['password']));


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

echo check_password('admin', 'admin');


?>