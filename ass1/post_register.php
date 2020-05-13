<?php
if(count($_POST)>0):
    require_once "User.php";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    //insert to table
    $user = new \ass1\User(null,$name,$email,$pwd);
    $user->save();

    header("Location: users.php");
endif;