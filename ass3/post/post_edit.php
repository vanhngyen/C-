
<?php
if(count($_POST) > 0):

// nhan thong tin tu form
    $id = $_POST['id'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    // insert to table
    $book = new model\Book($id,$name,$category,$desc,$price);
    $book->save();

    header("Location: ?route=books");// dieu huong tro lai trang danh sach
endif;