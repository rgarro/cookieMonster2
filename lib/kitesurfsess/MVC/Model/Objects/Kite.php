<?php
/**
 * 
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once __DIR__."/../../../../emptyLib/MVC/Model/TomaHawkPocoObject.php";

class Kite extends TomaHawkPocoObject{

    protected $id;
    protected $name;
    protected $area;

    function __construct(){
        parent::__construct();
    }
}