
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Add Student</title>
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Add Student</h1>
        <form action="post_addstudent.php" method="post">
            <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="age" type="text" placeholder="Age"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="mark" type="text" placeholder="Mark"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Add Student</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
