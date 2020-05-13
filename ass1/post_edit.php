<?php
if(count($_POST) > 0):
    require_once "User.php";

// nhan thong tin tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    // insert to table
    $user = new \ass1\User($id,$name,$email,$pwd);
    $user->save();

    header("Location: users.php");
endif;