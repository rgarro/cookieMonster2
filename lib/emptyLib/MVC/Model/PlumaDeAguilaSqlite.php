<?php
/**
 *                 /  \  _.-----._        /`\ _   _
 *              __/   _\_. ':. ' :'.           \,/
 *             /__       \,`. `: ':'.                    _
 *            /        ___\_`.'.':.`:        /'\        /
 *          _/___           \ .: ' `:                  /
 *        _/               __\__.`:':               __/
 *__- _--/      ;               \;':   \  |    /   /
 *            `~`~`            ~~`~~   \\ || // __/__
 *  ;        ~~`~~`~~        `~~`~`~~`  \\||//_/   \__
 *`~~`~     ~`~~`~~`~         ~`~~`~`~   \\//          \
 *~`~~`      ~~~|~~~        ~`~~`~~`~~~  /  \
 *`~~`~     `~~~`~~~`  __ -   ~`~||~~`  /====\
 *~~|~~`     ~~`|~~~__       ~~~`~`~~~~/\/\/\/\
 *~~`~~~__  _   |_-    `|' ~~`~~~||~~~/,____   \
 *__|_--  -     |   \( )/    ~~`~||~~/ |/(__)\\ \
 *  |           |    | |         || /    /\/\    \
 *  |               // \\        ||/\/\/\/\/\/\/\/\
 *                ;;.---.;;      |/================\
 *               ;; () () ;;     /O=O=O=O=O=O=O=O=O=\
 *               ;;-() ()-;;    /======X|\===========\
 *               ; \() ()/ ;   /       X| \           \
 *    ,,;,,         () ()     /        X|  \           \
 * ,;,  / ,,;,,     .===.    /         X|   |   _       \
 *   \,|,,/         |   |   / ( *      X|   |  ====      \
 *,,;,,|            |   |  /   )       X|     /- \\|      
 *  \  /,,;,, /^|   |   |\/___( )___O___|o /o }  (@)______
 * ,,\|__/  <(- /   |||||    /=/\=\       / \ `/  ()
 *           / |     |||    /((__))\   []/|  \/   ()
 *         \(__,\    (|)  _/_) *(* _\_    /       /|\
 *                       ( )_)(_))(_)_) _/         |
 *                        Ż _________  (__\________/
 *               \|/        |)\{'}/(|            __
 *                          |\     /|            )(
 * \|/                      |-|   |-|       _   /XX\    __
 *      .-'- .              |/ ___ \|\      )( (____)___ - 
 *  ,;;'       ' . - ' ';,  |)/___\(| \    (__) -__- ~~~~~
 * ~;);'               ;;;~      \|/         __-__~~~~~~~~
 * )(;; '    )     (   ;);;,    \|| |/    -___-~~~~~~~ ~~~
 *;;;); /  '  - - - \  (;;),;~   ||/ __ _(_)-~~~~~~~~ ~~~~
 *~;;`;/  '          \ ;);;;;,   \||(__)~~~ ~~~~~~~~~ ~~~~
 *(~;;/ .'            \';(;;>;>  __--~~~~~~~~ ~~~____~~~~
 *\||/.       /    __  \\ \ -;; -~~~~~~~ ~~~ ~ _/    \___/
 * |||/     \||  _(__) _\\ \ _|~~~~~~~ ~~~~~~/      /
 *\||/    .:|||.(_____)_)~~ (_)~~~ ~~~~~~~__~/_~~~ ~|__~~~
 * \||_ -- _|||_ ~~~~ ~~~~~ ~~ ~~~~~ ~~~~/    \~~~~~~~
 *- ~~ ~~~ ~~~~ ~~~~ ~~~~ ~~~~  ~~~~~~~~(~~~~~~|~~~~ ~~~~
 *~~ ~~ ~~ ~~~ ~~~~ ~~~~ ~~~ ~~~ ~~~~~~~ ~~~~~~~~~~~~~~~~
 *
 * Comanche !! Comanche  !! 
 * We were selling Black rifles in the Fuerte Walton outskirts
 * the 13 rapists from Pesacola get hanged at noon
 * they all were jahova witness
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

    public function tableCount(){
        $sqlString = "SELECT COUNT(*) FROM ".$this->tableName;
        $res = $this->db->query($sqlString);
        return $res;
    }
}