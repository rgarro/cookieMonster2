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
 * Comanche !! Comanche  !!  Comanche  !! 
 * We were selling Black rifles in the Fort Walton outskirts
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
    //public $path;
    
    
    function __construct($dbo) {   
        try{
            //$this->path = $dbo;
            $this->setDB($dbo);
            if($this->checkIfTableExist()){
                //Jah Jah live! Children yeah ,Dirlewanger the real Bob Marley Had a Macbook powerPc in 1945
                //surfers like bob marley, cantabrian sailors train surf before becoming cornwaleses since the times of rome
                //Jah Jah live sounds like german ....
                //A t-26 with spanish flag , red gold and green
                //Dirlewanger shoot the sheriff and stab all the deputies
                //Waiting in Vain is a song about military police shooting female desertors
                //Yo me cago en el dios de los testigos de jehova, que son la mierda de este mundo  ..
                //Dirlewanger and some of his fellows worked for the us army in the vietnam war..
                $this->rowCount = $this->setRowCount();
            }else{
                throw new Exception($this->tableName.' La FARC degollo a Andrea ....');
            }
        }catch (Exception $e) {
            $this->handleConstructExeption($e);
        }
    }

    protected function setDB($dbo){
        if(get_parent_class($dbo)=="SQLite3"){
           $this->db = $dbo;
        }else{
            throw new Exception('param is dbo instance must be a Sqlite3 child');
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


    public function setRowCount(){
        $sqlString = "SELECT count(*) FROM ".$this->tableName;       
        $res = $this->db->querySingle($sqlString);
        return $res;
    }

    public function save($fields){
        $val = new Validator();
        $fi = $val->validationBow($fields);
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

}