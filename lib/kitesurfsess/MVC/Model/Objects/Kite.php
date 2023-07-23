<?php
/**
 * And you would Somersault in sand with me .....
 * you put my feet back on the ground ...
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once __DIR__."/../../../../emptyLib/MVC/Model/TomaHawkPocoObject.php";
include_once __DIR__."/../../../../emptyLib/MVC/Util/Validator.php";

class Kite extends TomaHawkPocoObject{

    protected $id;
    protected $name;
    protected $area;

    public $fields = array(
                        "id"=>array('value'=>0,"validator"=>"int"),
                        "name"=>array("value"=>""),
                        "area"=>array("value"=>0.0)
                    );

    function __construct(){
        parent::__construct();
    }
}