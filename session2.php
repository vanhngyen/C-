<?php
// array php : khong gioi han so luong phan tu . giong JS
//array php : ket hop cua array JS và hashmap java

$ary = []; //khai bao bang ary
$ary[0] = 10;
$ary[1] = "T1907M";
$ary[] = 3.14;//tu dong nap vao vi tri index tiep theo
for ($i = 0;$i < count($ary);$i++ ){
    echo $ary[$i];
}

foreach ($ary as $e){//array as elemen --- nguocj với java
    echo $e;
}

$ary["point"]=100; //giong hashmap cua java
$ary[] = 11;
var_dump($ary); //javascript Console.log();
$arr[] = [];
$arr[] = 1;
$arr[] = $ary;
$arr[] = "hello";

$student = [
    "name " => "nguyen van anh",
    "age"   => 15,
    "id"    => 1
]; //mảng kiểu hashmasp => hay dung de dinh nghĩa du lieuj cho 1 phan tu
$student["point"]=10;
var_dump($student);
//if($student["point"] > 5){
//    echo $student["name"];
//}else{
//    echo "khong cho sinh vien";
//}
//alert();
sendMessage();
sendMessage("hello world!");
//dinh nghia 1 ham -- về bản chất giống javascript

function alert(){
    echo "Thong bao khan cap";
}

function sendMessage($msg = "haha"){ //tham so co the nap gia tri mac dinh ban dau
    echo $msg;
}

//thong dịch(runtime ) xong file nay chuyren









