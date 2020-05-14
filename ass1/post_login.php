<?php
if(count($_POST)>0):

    $email = $_POST['email'];
    $pwd = $_POST['password'];

    //insert to table
    $user = new \model\User();
    $user = $user->attempt($email,$pwd);

    if(!is_null($user)){
        $_SESSION['user']=$user;
        header("Location : ?route=users");
    }else{
        header("Location : ?route=login");
    }
endif;