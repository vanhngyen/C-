<?php
if(count($_POST)>0):
    require_once "Student.php";
//nhan thong tin tu form
    $name = $_POST['name'];
    $age = $_POST['age'];
    $mark = $_POST['mark'];
//insert to table
    $students = new ass2\Student(null,$name,$age,$mark);
    $students ->save();

    header("Location: students.php");
endif;