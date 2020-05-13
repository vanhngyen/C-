<?php
namespace ass1;
require_once "../assignment1/connect.php";

class User{
    public $id;
    public $name;
    public $email;
    public $password;

    public static $table = "users";

    private $conn;

    public function __construct($id=null,$name=null,$email=null,$password=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);
    }

    public static function getTable(){
        return self::$table;// để gọi static thì dùng self:: , java: class.
    }

    public function getConn(){
        if(is_null($this->conn)){
            $this->conn = connect();
        }
        return $this->conn;
    }

    public function getUsers(){
        $sql = "SELECT * FROM ".self::getTable();
        $rs = $this->getConn()->query($sql);
        return toArray($rs);
    }

    public function save(){
        $sql_text = "INSERT INTO ".self::getTable()." (id,name,email,password) VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name.
            "','".$this->email."','".$this->password."') ON DUPLICATE KEY UPDATE name = '".$this->name."',email = '".$this->email.
            "', password = '".$this->password."';";
        try{
            $this->getConn()->query($sql_text);
        }catch (\Exception $e){
            die($e->getMessage());
        }

    }

    public function find($id){
        $sql_text = "SELECT * FROM ".self::getTable()." WHERE id =".$id;
        $ary = toArray($this->getConn()->query($sql_text));
        if(count($ary)>0){
            $data = $ary[0];
            return new User($data["id"],$data["name"],$data["email"],$data["password"]);
        }
        return null;
    }

    public function delete(){
        $sql_text = "DELETE FROM ".self::getTable()." WHERE id=".$this->id;
        $this->getConn()->query($sql_text);
    }
}