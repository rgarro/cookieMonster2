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
 * day of execution by hanging at noon dia a los 13 violadores de pensacola
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

        }catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    protected function checkIfTableExist(){
        $sqlString = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='".$this->tableName."'";
        $res = $this->SqLiteDB->querySingle($sqlString);
    }

    protected function setRowCount(){}
}