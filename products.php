<?php
require_once("product/connect.php");
$products = getAll("products");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Product List</title>
</head>
<body>
<h1 style="text-align: center ; color: red">Product List </h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col"> Id </th>
        <th scope="col"> Name </th>
        <th scope="col"> Description </th>
        <th scope="col"> Price </th>
        <th scope="col"> Quantity </th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $s): ?>
        <tr>
            <td><?php echo $s["id"]; ?></td>
            <td><?php echo $s["name"]; ?></td>
            <td><?php echo $s["description"]; ?></td>
            <td><?php echo $s["price"]; ?></td>
            <td><?php echo $s["quantity"]; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
