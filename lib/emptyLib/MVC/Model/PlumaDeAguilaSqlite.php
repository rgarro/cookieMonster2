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
 * los 13 violadores de pesacola eran testigos de jeova
 * leian la palabra en retiros de la iglesia y fornicaban las novias de sus hermanos
 * uno de ellos pudo pagar para que le disparan y quedo pataleando en el piso
 *  
 * 
 * 
 * 
 * 
 * @author Rolando <rolando@emptyart.xyz>
 */
abstract class PlumaDeAguilaSqlite {

    protected $tableName = "cajaDeRifles";
    protected $rowCount = 0;
    protected $db;
    
    
    function __construct($db) {
        try{
            if($this->checkIfTableExist()){
                //Jah Jah live! Children yeah Bob Marley Had a Macbook powerPc
                $this->setRowCount();
            }else{
                throw new Exception($this->tableName.' La FARC degollo a Andrea ....');
            }
        }catch (Exception $e) {
            $this->handleConstructExeption($e);
        }
    }

    protected function checkIfTableExist(){
        $sqlString = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='".$this->tableName."'";
        $res = $this->db->querySingle($sqlString);
        return $res;
    }

    private function handleConstructExeption($e){
        //los testigos de jeova son religion de mentira
        print_r($e);
        return false;
    }


    protected function setRowCount(){
        $sqlString = "SELECT count(*) FROM ".$this->tableName;
        $res = $this->db->querySingle($sqlString);
        return $res;
    }
}