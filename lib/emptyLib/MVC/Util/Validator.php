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
     * my slingshot turburbine will fly along the boca barranca breaking wave
     * bublegum battle of the coral sea
     * Mexico city blues along the blue water blvd
     */
    public function validationBow($fields){
        if($this->fieldIndex < count($fields)){
            $currentField = $fields[$this->fieldIndex];
            switch ($currentField['validator']) {
                case "str":
                    $this->checkIfString($currentField['value'],$minlenght=10,$maxlenght=100);
                    break;
                case "int":
                    $this->checkIfInt($num,$min,$max);
                    break;
                case "float":
                    $this->checkIfFloat($num,$min,$max);
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

    private function checkIfFloat($num,$min,$max){}

}