<?php
namespace lib;
require_once "connector.php";
abstract class model{
    protected $table;

    public abstract function all();
    public abstract function save();
    public abstract function find($id);
    public abstract function delete();

    public function getTable(){
        return $this->table;// để gọi static thì dùng self:: , java: class.
    }

    public function getConn(){
        return connector::connector();
    }

    public function toArray($rs){
        $data = [];
        if($rs->num_rows > 0){
            while ($row = $rs->fetch_assoc()){
                $data [] = $row;
            }
        }
        return $data;
    }
}