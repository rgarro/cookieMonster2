<?php
/**
 *                          /\
 *                         |  |
 *                         |  |
 *                        .'  '.
 *                        |    |
 *                        |    |
 *                        | /\ |
 *                      .' |__|'.
 *                      |  |  |  |
 *                     .'  |  |  '.
 *                /\   |   \__/   |   /\
 *               |  |  |   |  |   |  |  |
 *           /|  |  |,-\   |  |   /-,|  |  |\
 *           ||  |,-'   |  |  |  |   '-,|  ||
 *           ||-'       |  |  |  |       '-||
 *|\     _,-'           |  |  |  |           '-,_     /|
 *||  ,-'   _           |  |  |  |               '-,  ||
 *||-'    =(*)=         |  |  |  |                  '-||
 *||                    |  \  /  |                    ||
 *|\________....--------\   ||   /--------....________/|
 *                      /|  ||  |\
 *                     / |  ||  | \
 *                    /  |  \/  |  \
 *                   /   |      |   \   
 *                 //   .|      |.   \\
 *               .' |_./ |      | \._| '.
 *              /     _.-|||  |||-._     \
 *              \__.-'   \||/\||/   '-.__/ 
 * Lord Kanhapa flyied from Somapuri to Srilanka followed by 500 bikhsus
 * suddenly whiped out in the downwind glide, his guru was floating the zenith and suddenly yelled
 * to triplicate the math procesor of a silicon graphics you need to cool down the room 
 * until -7celsius degrees, then instructed him on why not to use SolidWorks or heretic Autodesk
 * 
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