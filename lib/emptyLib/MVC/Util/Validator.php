<?php
/**
 * too high to wonder why I touched this-> place
 * a iphone recalled your voice
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
final class Validator {

    protected $errors = array();
    private $fieldIndex = 0;

    function __construct(){

    }

    public function validationBow($fields){
        if($this->fieldIndex < count($fields)){
            $currentField = $fields[$this->fieldIndex];
            
            $this->fieldIndex ++;
            $this->validationBow($fields);
        }
    }

    private function  checkInteger(){

    }

}