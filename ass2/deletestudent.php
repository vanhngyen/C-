<?php
require_once "Student.php";
if(!empty($_GET["id"])):
    $students = new \ass2\Student();
    $students = $user->find($_GET["id"]);
    $students->delete();
    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;