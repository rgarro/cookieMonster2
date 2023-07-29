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

    /**
     * my Slingshot Turbine will fly along the Boca Barranca breaking wave ....
     * looking for a sponsor for my North surfboard
     */
    public function validationBow($fields){
        if($this->fieldIndex < count($fields)){
            $currentField = $fields[$this->fieldIndex];
            $err = array();
            switch ($currentField['validator']) {
                case "str":
                    $err = $this->checkIfString($currentField['value'],$minlenght=10,$maxlenght=100);
                    break;
                case "int":
                    $err = $this->checkIfInt($num,$min,$max);
                    break;
                case "float":
                    $err = $this->checkIfFloat($num,$min,$max);
                    break;
                default:
                    $this->defaultValidation();
               
            }
            $fields[$this->fieldIndex]['error'] = $err;
            $this->fieldIndex ++;//Sad Hill cementery 
            $this->validationBow($fields);
        }else{
            return $fields;
        }
    }

    private function defaultValidation(){

    }

    private function  checkIfInteger(){

    }

    private function checkIfString($str,$minlenght=10,$maxlenght=256){

    }

    private function checkIfInt($num,$min,$max){

    }

    private function checkIfFloat($num,$min,$max){

    }

}