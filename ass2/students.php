<?php  require_once "Student.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<h1 style="text-align: center; color: brown">Student List</h1>
<table class="table">
    <thead style="background-color: lavenderblush ">
    <tr>
        <th scope="col"> ID </th>
        <th scope="col"> Name </th>
        <th scope="col"> Age </th>
        <th scope="col"> Mark </th>
        <th scope="col"> Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php $students = new ass2\Student();
    ?>
    <?php foreach ($students->getStudents() as $s): ?>
        <tr>
            <td><a href="editstudent.php?id=<?php echo $s["id"]; ?>"><?php echo $s["id"] ?></a></td>
            <td><?php echo $s["name"]?></td>
            <td><?php echo $s["age"]?></td>
            <td><?php echo $s["mark"]?></td>
            <td><a href="deletestudent.php?id=<?php echo $s["id"]; ?>">delete</a></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>