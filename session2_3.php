<?php
include_once("lib/connect.php");
//lay du lieu tu mysql đưa vào giao diện
//ra day duoc no la ket noi thanh cong
echo "connect succesfully";
$sql_text="SELECT * FROM students";
$rs=$conn->query($sql_text);
$students = [];
if($rs->num_rows>0){
    while($row = $rs->fetch_assoc()){
        $students[] =$row;
        //moi row la motj bang co cac key la cac collum
    }
}
//student mang chua sinh vien
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
</head>
<body>

<?php foreach ($students as $s):?>
    <ul>
        <li><?php echo $s["id"] ;?></li>
        <li><?php echo $s["name"] ;?></li>
        <li><?php echo $s["age"] ;?></li>
        <li><?php echo $s["mark"] ;?></li>
    </ul>
<?php endforeach;?>
</body>
</html>
