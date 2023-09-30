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
 * Validator is recursive on two arrows, the fieldsNames iterating the data the validation 
 * Assertions made to design this  1 ...
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
final class Validator {

    protected $errors = array();
    private $fieldIndex = 0;
    private $keysIndex = 0;
    private $validationIndex = 0;
    private $currentTopValidation = 0;
    protected $has_errors = false;
    protected $keysAreSet = false;
    protected $fieldsKeys = array();

    function __construct(){

    }

   //to whom speed means freedom of the soul ...
    public function validationBow($fields,$validations){
        if(!$this->keysAreSet){
           $this->setFieldsKeys($fields);
        }
        if($this->keysIndex < count($fields)){//show me how to live ...
            $currentField = $fields[$this->fieldsKeys[$this->fieldIndex]];
 echo "asdfasdfadf>";
            print_r($currentField); 
 echo "<asdfasdfadf";
 exit;          
            $err = array();
            $err = $this->doFieldValidation($currentField,$this->fieldsKeys[$this->fieldIndex],$validations);
            if(count($err)){
                $e = array("error"=>$err);
                array_push($e,$fields[$this->fieldsKeys[$this->fieldIndex]]);//['error'] = $err;
            //$fields['has_errors'] = true;
            }
            $this->keysIndex ++;//Sad Hill cementery 
            $this->validationBow($fields,$validations);//ready to begin .. 
        }else{
            return $fields;
        }
    }

    private function doFieldValidation($current_field,$current_key,$validations){
        if($this->validationIndex < count($validations)){

            $this->validationIndex ++;
            $this->doFieldValidation($current_field,$current_key,$validations);
        }else{
            $this->validationIndex = 0;
        }
        /*switch ($currentField['validator']) {
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
               
            }*/
            return array();
    }

    private function setFieldsKeys($fieldsArray){
         $this->fieldsKeys = array_keys($fieldsArray);
            $this->keysAreSet = true;
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