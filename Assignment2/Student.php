<?php
namespace Assignment2;
use lib\Connector;
use lib\Model;
require_once "../lib/Model.php";

class Student extends Model
{
    public $id;
    public $name;
    public $age;
    public $mark;

    protected $table = "students";

    /**
     * Student constructor.
     * @param $id
     * @param $name
     * @param $age
     * @param $mark
     */
    public function __construct($id=null, $name=null, $age=null, $mark=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->mark = $mark;
    }

    public function getStudents(){
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function all(){
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }

    public function save()
    {
        $sql_text = "INSERT INTO ".$this->getTable()." (id,name,age,mark) VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name.
            "','".$this->age."','".$this->mark."') ON DUPLICATE KEY UPDATE name = '".$this->name."',age = '".$this->age.
            "', mark = '".$this->mark."';";
        try{
            $this->getConn()->query($sql_text);
        }catch (\Exception $e){
            die($e->getMessage());
        }

    }

    public function find($id){
        $sql_text = "SELECT * FROM ".$this->getTable()." WHERE id =".$id;
        $ary = toArray($this->getConn()->query($sql_text));
        if(count($ary)>0){
            $data = $ary[0];
            return new Student($data["id"],$data["name"],$data["age"],$data["mark"]);
        }
        return null;
    }

    public function delete(){
        $sql_text = "DELETE FROM ".$this->getTable()." WHERE id =".$this->id;
        $this->getConn()->query($sql_text);
    }
}
