<?php
/**
 * Lord Kanhapa flyied from Somapuri to Srilanka followed by 500 bikhsus
 * suddenly whiped out in the downwind glide, his guru was floating the zenith and suddenly yelled
 * to triplicate the math procesor of a silicon graphics you need to cool down the room 
 * until -7celsius degrees, then instructed him on why not to use SolidWorks or heretic Autodesk
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once __DIR__."/../../../emptyLib/MVC/Model/PlumaDeAguilaSqlite.php";
include_once __DIR__."/Objects/Kite.php";

class Kites extends PlumaDeAguilaSqlite {

    protected $tableName = "kites";

    function __construct($sqLiteDB){
        parent::__construct($sqLiteDB);
    }

}