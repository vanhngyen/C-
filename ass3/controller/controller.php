<?php

class controller{

    public function add(){
        require_once "ass3/view/add.php";
    }

    public function postadd(){
        $name = $_POST['name'];
        $category = $_POST['category'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        // insert to table
        $book = new model\Book(null,$name,$category,$desc,$price);
        $book->save();

        header("Location: ?route=books");
    }

    public function edit(){
        require_once "ass3/view/edit.php";
    }

    public function postedit(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $category = $_POST['category'];
        $desc = $_POST['description'];
        $price = $_POST['price'];
        // insert to table
        $book = new model\Book($id,$name,$category,$desc,$price);
        $book->save();

        header("Location: ?route=books");// dieu huong tro lai trang danh sach
    }

    public function delete(){
        $book = new \model\Book();
        $book = $book->find($_GET["id"]);
        $book->delete();
        header("Location: ?route=books");// dieu huong tro lai trang danh sach
    }

    public function books(){
        require_once "ass3/view/books.php";
    }
}