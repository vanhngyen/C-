<?php
$host="localhost";
$userDB="root";
$passDB="";
$dbName="t1907m";
$conn=new mysqli($host,$userDB,$passDB,$dbName); //khong can port
if($conn->connect_error){
    die("Connect fail");//die la ham dung luong dang chay, php la ngon ngu don luong(single throw)

}