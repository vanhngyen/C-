<?php
if(count($_POST) > 0):
    require_once "Student.php";

// nhan thong tin tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age =$_POST['age'];
    $mark =$_POST['mark'];

    // insert to table
    $students = new \Assignment2\Student($id,$name,$age, $mark);
    $students->save();

    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;