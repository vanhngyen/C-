<?php
$route = $_GET["route"];

$controller = new Controller();

switch ($route){
    case "login": $controller->login();break;
    case "post_login": $controller->postLogin();break;
    case "register": $controller->register();break;
    case "post_register": $controller->postRegister();break;
    case "users": $controller->users();break;
    case "edit": require __DIR__ . "/View/edit.php";break;
    case "post_edit": require __DIR__."/ass1/post_edit.php";break;
    case "delete": require __DIR__."/ass1/delete.php";break;

    default: require __DIR__ . "View/home.php";
}