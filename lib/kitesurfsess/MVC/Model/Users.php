<?php
/**
 *                .---.
 *           '-.  |   |  .-'         
 *             ___|   |___          
 *        -=  [           ]  =-    
 *            `---.   .---'         
 *         __||__ |   | __||__      
 *         '-..-' |   | '-..-'   
 *           ||   |   |   ||     
 *           ||_.-|   |-,_||     
 *         .-"`   `"`'`   `"-.   
 *jgs    .'                   '.
 * LOS JOTOS NO TIENEN CURA o EL RETO DE JOTO
 * Cast: Jimmy Wang Yu, Lo Lieh, Lung Fei, Chung Hwa, Chen Hung Lieh
 * Tecnicolor
 * 
 */
include_once __DIR__."/../../../emptyLib/MVC/Model/PlumaDeAguilaSqlite.php";
include_once __DIR__."/Objects/Kite.php";

class Users extends PlumaDeAguilaSqlite {
    function __construct(){
        parent::__construct();
    }
}