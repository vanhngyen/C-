<?php
require_once "Student.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Edit</h1>
        <form action="post_update.php" method="post">
            <?php
            $id = $_GET["id"];
            $students = new \Assignment2\Student();
            $students = $students->find($id);
            ?>
            <input type="hidden" name="id" value="<?php echo $students->id;?>"/>
            <div class="form-group">
                <input class="form-control" value="<?php echo $students->name;?>" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" value="<?php echo $students->age;?>" name="age" type="text" placeholder="Age"/>
            </div>
            <div class="form-group">
                <input class="form-control" value="<?php echo $students->mark;?>" name="mark" type="text" placeholder="Mark"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>