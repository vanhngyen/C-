<?php

namespace model;
use lib\Connector;
use lib\Model;

class Book extends Model{

    public $id;
    public $name;
    public $category;
    public $description;
    public $price;

    protected $table = "books";

    /**
     * Book constructor.
     * @param $id
     * @param $name
     * @param $category
     * @param $description
     * @param $price
     * @param string $table
     */
    public function __construct($id=null, $name=null, $category=null, $description=null, $price=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->description = $description;
        $this->price = $price;
    }

    public function getbooks(){
        $sql = " SELECT * FROM ".$this->table;
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function all()
    {
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function save()
    {
        $sql_text = "INSERT INTO ".$this->table."(id,name,category,description,price)VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name."','".$this->category."','".$this->description."','.$this->price.')ON DUPLICATE KEY UPDATE name = '".$this->name."',category = '".$this->category."',description ='".$this->description."', price = ".$this->price.";";
    }

    public function find($id)
    {
        $sql_text = "SELECT * FROM ".$this->getTable()." WHERE id = ".$id;
        $ary = $this->toArray($this->getConn()->query($sql_text));
        if(count($ary) > 0){
            $data = $ary[0];
            return new User($data["id"],$data["name"],$data["category"],$data["description"],$data["price"]);
        }
        return null;
    }

    public function delete()
    {
        $sql_text = "DELETE FROM ".$this->getTable()." WHERE id = ".$this->id;
        $this->getConn()->query($sql_text);
    }
}
