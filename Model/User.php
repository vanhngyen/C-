<?php
namespace ass1;

namespace Model;
use lib\Connector;
use lib\Model;
class User extends Model{
    public $id;
    public $name;
    public $email;
    public $password;

    protected $table = "users";


    public function __construct($id=null,$name=null,$email=null,$password=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);
    }

    public function all(){
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }


    public function getUsers(){
        $sql = "SELECT * FROM ".$this->getTable();
        $rs = $this->getConn()->query($sql);
        return $this->toArray($rs);
    }



    public function save(){ // la su ket hop cua insert va update
        $sql_text = "INSERT INTO ".$this->getTable()." (id,name,email,password) VALUES(".(is_null($this->id)?'null':$this->id).",'".$this->name.
            "','".$this->email."','".$this->password."') ON DUPLICATE KEY UPDATE name = '".$this->name."',email = '".$this->email.
            "', password = '".$this->password."';";
        try{
            $this->getConn()->query($sql_text);
        }catch (\Exception $e){
            die($e->getMessage());
        }
    }

    public function find($id){
        $sql_text = "SELECT * FROM ".$this->getTable()." WHERE id = ".$id;
        $ary = $this->toArray($this->getConn()->query($sql_text));
        if(count($ary) > 0){
            $data = $ary[0];
            return new User($data["id"],$data["name"],$data["email"],$data["password"]);
        }
        return null;
    }

    public function delete(){
        $sql_text = "DELETE FROM ".$this->getTable()." WHERE id = ".$this->id;
        $this->getConn()->query($sql_text);
    }

    public function attempt($email,$password){
        $password = md5($password);
        $sql_text = "SELECT * FROM ".$this->getTable()." WHERE email LIKE '".$email."' AND password LIKE '".$password."'";
        $ary = $this->toArray($this->getConn()->query($sql_text));
        if(count($ary) > 0){
            $data = $ary[0];
            return $data;
        }
        return null;
    }

}