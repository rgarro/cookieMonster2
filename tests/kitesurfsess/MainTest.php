<?php
/**
 *                  _..--+~/@-~--.
 *            _-=~      (  .     "}  
 *         _-~     _.--=.\   \""""
 *       _~      _-       \ \_\
 *      =      _=          '--'
 *     '      =                             .
 *    :      :       ____                   '=_. ___
*___  |      ;                            ____ '~--.~.
 *    ;      ;                               _____  } |
 * ___=       \ ___ __     __..-...__           ___/__/__
 *    :        =_     _.-~~          ~~--.__
*_____ \         ~-+-~                   ___~=_______
 *    ~@#~~ == ...______ __ ___ _--~~--_
 *
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__."/../../lib/kitesurfsess/BayouFalconNest.php";
include_once __DIR__."/../../lib/kitesurfsess/MVC/Model/Kites.php";

final class MainTest extends TestCase{

    private $dbpath = "/Users/rolando/Documents/Projects/cookieMonster2/apps/kitesurfSesCounter/db/kitesurfsessdb.db";
    private $SqLiteDB;
    
    protected function setUp():void
    {
        $this->SqLiteDB = new BayouFalconNest($this->dbpath);
    }

    public function testWeCanTest(): void
    {
        $this->assertTrue(true);
    }

    public function testDbIsSqlite():void{  
        $this->assertTrue(get_parent_class($this->SqLiteDB)=="SQLite3");
    }

    public function testDbHasKitesTable(){
        $sqlString = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='kites'";
        $res = $SqLiteDB->querySingle($sqlString);
        echo $sqlString;
        print_r($res);
    }

    public function testInsertAKiteIncrementsKitesTableCount(){

    }

    public function testKiteModelExist(){

    }

    public function testKiteModelExtendsPlumaDeAguilaSqliteParentModel(){

    }

    public function testPlumaDeAguilaChildrenVerifyIfTableExistOnConstruct(){
        
    }

    public function testKiteModelHasOptionListMethod(){

    }

    /**Begin Users Assertion */

    public function testUsersModelExist(){

    }

    public function testUsersModelExtendsPlumaDeAguilaSqliteParentModel(){

    }

    /**End Users Assertions */
}