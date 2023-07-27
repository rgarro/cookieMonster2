<?php
/**
 *                   _------__--___.__.
 *                 /            `  `    \
 *                |                      \
 *                |                       |
 *                 \                      |
 *                   ~/ --`-`-`-\         |
 *                   |            |       |
 *                   |            |       |
 *                    |   _--    |       |
 * Hey Butthead,      _| =-.    |.-.    |
 *                    o|/o/       _.   |
 *does this suck?     /  ~          \ |
 *                  (____@)  ___~    |
 *                     |_===~~~.`    |
 *                  _______.--~     |
 *                  \________       |
 *                           \      |
 *                         __/-___-- -__
 *                        /            __\
 *                       /-| Metallica|| |
 *                      / /|          || |
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
            switch ($currentField['validator']) {
                case "str":
                    $this->checkIfString($currentField['value'],$minlenght=10,$maxlenght=100);
                    break;
                case "int":
                    echo "i equals 1";
                    break;
                case "float":
                    echo "i equals 2";
                    break;
               
            }
            
            $this->fieldIndex ++;//Sad Hill cementery 
            $this->validationBow($fields);
        }else{
            return $fields;
        }
    }

    private function  checkIfInteger(){

    }

    private function checkIfString($str,$minlenght=10,$maxlenght=100){}

    private function checkIfInt($num,$min,$max){}

}