<?php
    $route = $_GET["route"];

    $controller = new controller();

    switch ($route){
        case "add":$controller->add();break;
        case "post_add":$controller->postadd();break;
        case "books":$controller->books();break;
        case "edit":$controller->edit();break;
        case "post_edit":$controller->postedit();break;
        case "delete":$controller->delete();break;
        default:require __DIR__."../ass3/view/home.php";break;
    }