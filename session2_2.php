<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Lồng ghép html - php</title>
</head>
<body>
    <h1>Thong tin sinh vien</h1>
    <?php
            //day la noi viet code php
            //ra ngoai pham vi nay thi no la code html
    include_once ("students.php");//nạp file php vào 1 file khác

    ?>
    <?php foreach ($students as $s): // ket hop ma html - php?>
        <ul>
            <li><a href="#"><?php echo $s->name ?></a></li>
            <li><?php echo $s->age ?>tuoi</li>
            <li><?php echo $s->point ?> diem</li>
        </ul>

    <?php endforeach;//lam the nay de khoi lan vơi dau {} cua bon khac nhu if else?>

</body>
</html>
