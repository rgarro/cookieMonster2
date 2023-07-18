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
 * Will jump over White Point, dont fall on the dry
 * buy a brain case helmet, execute a RESTFUl service after the session
 * and smoke the safety joint
 *  
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__."/../../lib/kitesurfsess/BayouFalconNest.php";
include_once __DIR__."/../../lib/kitesurfsess/MVC/Model/Kites.php";

final class MainTest extends TestCase{

    private $dbpath = "/Users/rolando/Documents/Projects/cookieMonster2/apps/kitesurfSesCounter/db/kitesurfsess.db";
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
        $res = $this->SqLiteDB->querySingle($sqlString);
        $this->assertTrue($res==1);
    }

    public function testKitesModelExist(){
        $kiteModel = new Kites($this->SqLiteDB);
        $this->assertTrue(get_class($kiteModel)=="Kites");
    }

    public function testKitesHasTableCountMethod(){
        $kiteModel = new Kites($this->SqLiteDB);
        //$this->assertClassHasAttribute('tableCount',$kiteModel);
        $this->assertTrue(method_exists($kiteModel,'tableCount'));
    }

    public function testSaveAKiteIncrementsKitesTableCount(){

    }


    public function testKiteModelExtendsPlumaDeAguilaSqliteParentModel(){

    }

    public function testPlumaDeAguilaChildrenVerifyIfTableExistOnConstruct(){
        
    }

    public function testKiteModelHasOptionListMethod(){
        $kiteModel = new Kites($this->SqLiteDB);
        $this->assertTrue(method_exists($kiteModel,'optionList'));
    }

    /**Begin Users Assertion */

    public function testUsersModelExist(){

    }

    public function testUsersModelExtendsPlumaDeAguilaSqliteParentModel(){

    }

    /**End Users Assertions */
}