<?php
/**
 * +--^----------,--------,-----,--------^-,
 *  | |||||||||   `--------'     |          O -
 *  `+---------------------------^----------|
 *    `\_,---------,---------,--------------'
 *      / XXXXXX /'|       /'
 *     / XXXXXX /  `\    /'
 *    / XXXXXX /`-------'
 *   / XXXXXX /
 *  / XXXXXX /
 * (________(                
 *  `------'            
 *
 * A Sqlite3 Mescalero Orm 
 * Writen on 11 assertions until now
 * 
 *
 * 
 * 
 * @author Rolando <rolando@emptyart.xyz>
 */
include_once __DIR__."/../../../emptyLib/MVC/Util/Validator.php";

abstract class PlumaDeAguilaSqlite {

    protected $tableName = "cajaDeRifles";
    protected $rowCount = 0;
    protected $db;
    public $validator = array();
    protected $validation_errors = array();
    //public $path;
    
    
    function __construct($dbo) {   
        try{
            //$this->path = $dbo;
            $this->setDB($dbo);
            if($this->checkIfTableExist()){
                $this->rowCount = $this->setRowCount();
            }else{
                throw new Exception($this->tableName.' La FARC degollo a Andrea ....');
            }
        }catch (Exception $e) {
            $this->handleConstructExeption($e);
        }
    }

    protected function setDB($dbo){
        if(get_parent_class($dbo)=="SQLite3"){
           $this->db = $dbo;
        }else{
            throw new Exception('param is dbo instance must be a Sqlite3 child');
        }
    }

    protected function checkIfTableExist(){
        $sqlString = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='".$this->tableName."'";     
        $res = $this->db->querySingle($sqlString);      
        return $res;
    }

    private function handleConstructExeption($e){
        return false;
    }


    public function setRowCount(){
        $sqlString = "SELECT count(*) FROM ".$this->tableName;       
        $res = $this->db->querySingle($sqlString);
        return $res;
    }

    public function save($fields){
        $val = new Validator();
        $fi = $val->validationBow($fields);
        if($fi->has_errors){
            $this->validation_errors = $fi->errors;
        }
        return $fi;
    }

    public function optionList($idField="",$labelField=""){
        $sqlString = "SELECT ".$idField.",".$labelField." FROM ".$this->tableName;
        $res = $this->db->query($sqlString);
        /*while ($row = $res->fetchArray()) {
            var_dump($row);
        }*/
        return $res;
    }

}