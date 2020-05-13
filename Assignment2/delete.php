<?php
require_once "Student.php";
if(!empty($_GET["id"])):
    $students = new \Assignment2\Student();
    $students = $students->find($_GET["id"]);
    $students->delete();
    header("Location: students.php");// dieu huong tro lai trang danh sach
endif;