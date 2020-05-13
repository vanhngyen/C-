<?php //lay du lieu tu mysql dua vao php
function connect(){
    $host = "localhost";
    $userDB = "root";
    $passDB = "";
    $dbName ="t1907m";
    $conn = new mysqli($host,$userDB,$passDB,$dbName); //không cần port

    if($conn->connect_error){
        die("Connect fail"); //die là hàm dùng để chạy , php là ngôn ngữ đơn luồng (single throw)
    }

    return $conn;
}

function getAll($table){
    $conn =connect();
    $sql_text = "SELECT * FROM ".$table;
    $data =[];
    $rs =$conn->query($sql_text);
    if ($rs->num_rows >0){
        while ($row = $rs->fetch_assoc()){
            $data [] =$row;
        }
    }
    return $data;
}

function toArray($rs){
    $data = [];
    if($rs -> num_rows > 0){
        while ($row = $rs -> fetch_assoc()){
            $data[] = $row;
            //mỗi row mà 1 mảng có các key là các column
        }
        //var_dump($students);
    }
    //students là mang chứa các sinh viên
    return $data;
}