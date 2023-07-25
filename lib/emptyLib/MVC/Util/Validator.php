<?php
/**
 * too high to wonder why I touched $this->place
 * an iphone recalled your voice
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
            //if(=="str"){}
            //if($currentField['validator']=="int"){}
            //if($currentField['validator']=="float"){}
            switch ($currentField['validator']) {
                case "str":
                    echo "i equals 0";
                    break;
                case "int":
                    echo "i equals 1";
                    break;
                case "float":
                    echo "i equals 2";
                    break;
            }
            
            $this->fieldIndex ++;
            $this->validationBow($fields);
        }
    }

    private function  checkInteger(){

    }

}