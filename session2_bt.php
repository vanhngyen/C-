<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Thông tin sinh viên</title>
</head>
<body>
    <h1>Thông tin sinh viên </h1>
    <?php
    $students = [];
    $students[] =[
        "name" => "Nguyễn Vân Anh",
        "age"  => 15,
        "point" => 10,
        "address" => "so 8 ton that thuyet",
        "phone" => "09876543"
    ];
    $students[] =[
        "name" => "Nguyễn Thị Nhân",
        "age"  => 15,
        "point" => 10,
        "address" => "so 8 ton that thuyet",
        "phone" => "09876543"
    ];
    $students[] =[
        "name" => "Mai Thị Thùy linh",
        "age"  => 15,
        "point" => 10,
        "address" => "so 8 ton that thuyet",
        "phone" => "09876543"
    ];
    $students[] =[
        "name" => "Phạm Thị Huyền",
        "age"  => 15,
        "point" => 10,
        "address" => "so 8 ton that thuyet",
        "phone" => "09876543"
    ]
    ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col"> Name </th>
                <th scope="col"> Age </th>
                <th scope="col"> Point </th>
                <th scope="col"> Address </th>
                <th scope="col"> Phone </th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $s): ?>
            <tr>
                <td><?php echo $s["name"]?></td>
                <td><?php echo $s["age"]?></td>
                <td><?php echo $s["point"]?></td>
                <td><?php echo $s["address"]?></td>
                <td><?php echo $s["phone"]?></td>
            </tr>
            <?php endforeach;?>
            </tbody>

        </table>
</body>
</html>
