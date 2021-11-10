<?php
$is_route = isset($_GET['route']);
if ($is_route) {
$route = $_GET['route'];
}
else {
    $route = "";
};

switch ($route) {
    case "":
        $_SESSION['title'] = 'Home page';
        require "main.php";
        break;
    case "test":
        $_SESSION['title'] = 'test';
        require 'test.php';
        break;
    case 'db':
        require 'db.php';
        break;
    default:
        $_SESSION['title'] = 'Page not found';
        require "404.php";
        break;
}
?>
