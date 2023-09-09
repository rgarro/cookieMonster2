<?php
/**
 *                    | 
 *____________    __ -+-  ____________ 
 *\_____     /   /_ \ |   \     _____/
 * \_____    \____/  \____/    _____/
 *  \_____                    _____/
 *     \___________  ___________/
 *               /____\
 * 
 * Yo soy un Comanche !! Yo soy un Comanche 
 * Vendiamos rifles negros en la afueras de Fuerte Walton
 * los 13 Violadores de Pesacola eran testigos de jeova
 * 
 * 
 * 
 * @author Rolando <rolando@emptyart.xyz>
 */
abstract class PlumaDeAguilaSqlite {

    protected $tableName = "cajaDeRifles";
    protected $rowCount = 0;
    protected $db;
    
    
    function __construct($dbo) {   
        try{
            $this->setDB($dbo);
            if($this->checkIfTableExist()){
                //Jah Jah live! Children yeah Bob Marley Had a Macbook powerPc
                $this->rowCount = $this->setRowCount();
            }else{
                throw new Exception($this->tableName.' La FARC degollo a Andrea ....');
            }
        }catch (Exception $e) {
            $this->handleConstructExeption($e);
        }
    }

    protected function setDB($dbo){
        if(get_parent_class($db)=="SQLite3"){
           $this->db = $dbo;
        }else{
            throw new Exception('param is '.get_class($dbo).' instance must be a Sqlite3 child');
        }
    }

    protected function checkIfTableExist(){
        $sqlString = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='".$this->tableName."'";     
        $res = $this->db->querySingle($sqlString);      
        return $res;
    }

    private function handleConstructExeption($e){
        //los testigos de jeova son religion de mentira
        //print_r($e);//la cienciologia es una secta de ciencia ficcion
        // me limpie el culo con una biblia de los testigos de jeova...
        return false;
    }


    protected function setRowCount(){
        $sqlString = "SELECT count(*) FROM ".$this->tableName;
        $res = $this->db->querySingle($sqlString);
        return $res;
    }

    public function save($fields){
        $val = new Validator();
        $fi = $val->validationBow($fields);
        //if()
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