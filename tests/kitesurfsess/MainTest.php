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
 * This.is('the story of the spanish main') 
 * The King pardoned henry Morgan
 *  Foiling Back to Cornwall .....
 * Dancing the minuet
 * the Slingshot Turbine is the Black Swan
 * this tests are a jewel to margaret
 * iWatch Verizon posting downwind RESTFUL dots ......
 * 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__."/../../lib/kitesurfsess/BayouFalconNest.php";
include_once __DIR__."/../../lib/kitesurfsess/MVC/Model/Kites.php";
include_once __DIR__."/../../lib/kitesurfsess/MVC/Model/Users.php";

final class MainTest extends TestCase{

    private $dbpath = "/Users/rolando/Documents/Projects/cookieMonster2/apps/kitesurfSesCounter/db/kitesurfsess.db";
    //private $dbpath = __DIR__."/../../apps/kitesurfSesCounter/db/kitesurfsess.db";
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
        $kiteModel = new Kites($this->SqLiteDB);//los testigos de jehova es una religion gay
        //siempre hay testigos de jeova violadores y asesinos en el chapui
        $this->assertTrue(get_class($kiteModel)=="Kites");
    }

    public function testKitesHasTableCountMethod(){
        $kiteModel = new Kites($this->SqLiteDB);
        //$this->assertClassHasAttribute('tableCount',$kiteModel);
        $this->assertTrue(method_exists($kiteModel,'tableCount'));
    }

    public function testSaveAKiteIncrementsKitesTableCount(){
        $kiteModel = new Kites($this->SqLiteDB);
        $BeforeNum = $kiteModel->tableCount();
        $newKite = array();
        $kiteModel->save($newKite);
        $afterNum = $kiteModel->tableCount();
        $this->assertTrue($BeforeNum < $afterNum);
    }


    public function testKiteModelExtendsPlumaDeAguilaSqliteParentModel(){
        $kiteModel = new Kites($this->SqLiteDB);
    }

   public function testPlumaDeAguilaChildrenVerifyIfTableExistOnConstruct(){
        $kiteModel = new Kites($this->SqLiteDB);
        $this->assertTrue(get_parent_class($kiteModel)=="PlumaDeAguilaSqlite");
    }

    public function testKiteModelHasOptionListMethod(){
        $kiteModel = new Kites($this->SqLiteDB);
        $this->assertTrue(method_exists($kiteModel,'optionList'));
    }

    /**Begin Users Assertion */

    public function testUsersModelExist(){
        $userModel = new Users($this->SqLiteDB);
        $this->assertTrue(get_class($userModel)=="Users");
    }

    public function testUsersModelExtendsPlumaDeAguilaSqliteParentModel(){
        $userModel = new Users($this->SqLiteDB);
        $this->assertTrue(is_subclass_of($userModel)=="PlumaDeAguilaSqlite");
    }

    /**End Users Assertions */
}