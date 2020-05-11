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
    $conn = connect();
    $sql_text = "SELECT * FROM ".$table;
    $data = [];
    $rs = $conn->query($sql_text);
    $products = [];
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()){
            $data [] = $row;
            //mỗi row là 1 mảng , có các key kaf các column
        }
    }
    return $data;
}
