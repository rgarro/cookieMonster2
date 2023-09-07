<?php
/**
 * Cast: Jimmy Wang Yu, Lo Lieh, Lung Fei, Chung Hwa, Chen Hung Lieh
 */
include_once __DIR__."/../../../emptyLib/MVC/Model/PlumaDeAguilaSqlite.php";
include_once __DIR__."/Objects/Kite.php";

class Users extends PlumaDeAguilaSqlite {
    function __construct(){
        parent::__construct();
    }
}