<?php
/**
 *              |    |    |                 
 *             )_)  )_)  )_)              
 *            )___))___))___)\            
 *           )____)____)_____)\\
 *         _____|____|____|____\\\__
 *---------\                   /---------
 *  ^^^^^ ^^^^^^^^^^^^^^^^^^^^^
 *    ^^^^      ^^^^     ^^^    ^^
 *         ^^^^      ^^^
 *
 * This.is('The Story of the Spanish Main') 
 * The King has pardoned Henry Morgan
 *  Foiling Back to Cornwall ......
 * class Micro_Minuet{
 *  long Jhon = S(i)L;//ver.02
 * }
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
        $kiteModel = new Kites($this->SqLiteDB);
        $this->assertTrue(get_class($kiteModel)=="Kites");
    }

    public function testKitesHasSetRowCountMethod(){
        $kiteModel = new Kites($this->SqLiteDB);
        //$this->assertClassHasAttribute('tableCount',$kiteModel);
        $this->assertTrue(method_exists($kiteModel,'setRowCount'));
    }

    public function testSaveAKiteIncrementsKitesTableCount(){
        $this->SqLiteDB = new BayouFalconNest($this->dbpath);
        $kiteModel = new Kites($this->SqLiteDB);     
        $BeforeNum = $kiteModel->setRowCount();
        //$newKite = array("id"=>1,"name"=>"test duotone","area"=>9);
        $newKite = array("name"=>"test duotone","area"=>9);
        $kiteModel->save($newKite);
        /*$afterNum = $kiteModel->setRowCount();
        $this->assertTrue($BeforeNum < $afterNum);*/
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

    /*public function testUsersModelExist(){
        $userModel = new Users($this->SqLiteDB);
        $this->assertTrue(get_class($userModel)=="Users");
    }

    public function testUsersModelExtendsPlumaDeAguilaSqliteParentModel(){
        $userModel = new Users($this->SqLiteDB);
        $this->assertTrue(is_subclass_of($userModel)=="PlumaDeAguilaSqlite");
    }*/

    /**End Users Assertions */
}