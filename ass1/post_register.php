<?php
if(count($_POST) > 0):

// nhan thong tin tu form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    // insert to table
    $user = new \model\User(null,$name,$email,$pwd);
    $user->save();

    header("Location: ?route=users");// dieu huong tro lai trang danh sach
endif;