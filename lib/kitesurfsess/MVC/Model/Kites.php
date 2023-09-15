<?php
/**
 *                            ______
 *         |\_______________ (_____\\______________
 * HH======#H###############H#######################
 *         ' ~""""""""""""""`##(_))#H\"""""Y########
 *                           ))    \#H\       `"Y###
 * dew                       "      }#H)
 * Lord Kanhapa flyied from Somapuri to Srilanka followed by 500 bikhsus
 * suddenly whiped out in the downwind glide, his guru was floating the zenith and suddenly yelled
 * to triplicate the math procesor of a silicon graphics you need to cool down the room 
 * until -7celsius degrees, then instructed him on why not to use SolidWorks or heretic Autodesk
 * Master, replied Kanhapa , hot air welders are from beijing, liu bei betrayed the fifth dalai lama
 * Nobody buys crabs from the deepens of baikal lake anymore, the mig 21 engine ionizes levitating gases
 * the bonpos from planet nimbo will trade them for new harware
 * 
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once __DIR__."/../../../emptyLib/MVC/Model/PlumaDeAguilaSqlite.php";
include_once __DIR__."/Objects/Kite.php";

class Kites extends PlumaDeAguilaSqlite {

    protected $tableName = "kites";
    public $validator = array(
                            "id"=>array("int"=>"int"),
                            "name"=>array("str"=>"str","required"=>1,"maxlenght"=>50),
                            "area"=>array("int"=>"int","required"=>1,"min"=>2,"max"=>22),
                        );

    function __construct($sqLiteDB){       
        parent::__construct($sqLiteDB);
    }

}