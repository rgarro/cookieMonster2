<?php
/**
 *                   ___..................____
 *           _..--''~_______   _____...----~~~\\
 *       __.'    .-'~       \\~      [_`.7     \\
 * .---~~      .'            \\           __..--\\_
 * /             `-._          \\   _...~~~_..---~  ~~~~~~~~~~~~--.._
 * \              /  ~~~~~~----_\`-~_-~~__          ~~~~~~~---.._    ~--.__
 * \     _       |==            |   ~--___--------...__          `-   _.--"""|
 *  \ __/.-._\   |              |            ~~~~--.  `-._ ___...--~~~_.'|_Y |
 *   `--'|/~_\\  |              |     _____           _.~~~__..--~~_.-~~~.-~/
 *     | ||| |\\_|__            |.../.----.._.        | Y |__...--~~_.-~  _/
 *      ~\\\ || ~|..__---____   |||||  .'~-. \\       |_..-----~~~~   _.~~
 *        \`-'/ /     ~~~----...|'''|  |/"_"\ \\   |~~'           __.~
 *         `~~~'                 ~~-:  ||| ~| |\\  |        __..~~
 *                                   ~~|||  | | \\/  _.---~~
 *                                     \\\  //  | ~~~
 *                                      \`-'/  / dp
 *                                       `~~~~'
 * STAND BY
 *  this. Radio Station was named Validator in Honor of the Last American Hero
 * to whom speed means freedom of the soul
 *  And in your waiting hands, I will land
 * And roll out of my skin
 * And in your final hours, I will stand
 * Ready to begin
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
final class Validator {

    protected $errors = array();
    private $fieldIndex = 0;
    private $validationIndex = 0;
    private $currentTopValidation = 0;
    protected $has_errors = false;

    function __construct(){

    }

   //to whom speed means freedom of the soul ...
    public function validationBow($fields,$validations){
 print_r($fields); 
 //print_r($validations);
 //exit;      
        if($this->fieldIndex < count($fields)){//show me how to live ...
            $currentField = $fields[$this->fieldIndex];
 echo "asdfasdfadf";
            print_r($currentField); 
 echo "asdfasdfadf";
 exit;          
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
                case "bool":
                        $err = $this->checkIfBool($val);
                        break;    
                default:
                    $this->defaultValidation();
               
            }
            $fields[$this->fieldIndex]['error'] = $err;
            //$fields['has_errors'] = true;
            $this->fieldIndex ++;//Sad Hill cementery 
            $this->validationBow($fields,$validations);//ready to begin .. 
        }else{
            return $fields;
        }
    }

    private function setCurrentValidator(){

    }

    private function defaultValidation(){

    }


    private function checkIfString($str,$minlenght=10,$maxlenght=256){

    }

    private function checkIfInt($num,$min,$max){

    }

    private function checkIfFloat($num,$min,$max){

    }

    private function checkIfBool($val){

    }

}