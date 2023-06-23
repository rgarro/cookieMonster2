<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
/**
 *         -.--.
 *         )  " '-,
 *         ',' 2  \_
 *          \q \ .  \
 *       _.--'  '----.__
 *      /  ._      _.__ \__
 *   _.'_.'  \_ .-._\_ '-, }
 *  (,/ _.---;-(  . \ \   ~
 *____ (  .___\_\  \/_/
 *(      '-._ \   \ |
 * '._       ),> _) >
 *   '-._ c='  Cooo  -._
 *       '-._           '.
 *           '-._         `\
 *      snd      '-._       '.
 *                   '-._     \
 *                       `~---'
 *
 * the fried chiken feathers of a sqlite backend 
 *  Transitioning the 24knots winds
 * my foil wing is a mathcad file living in AWS
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once '/Users/rolando/Documents/Projects/cookieMonster2/lib/sqlitetest/MyDB.php';

final class MainTest extends TestCase{

    private $dbpath = "/Users/rolando/Documents/Projects/cookieMonster2/apps/sqlitetest/db/chinook.db";
    
    protected function setUp():void
    {
        //echo "hepppre";
    }

    public function testWeCanTest(): void
    {
        $this->assertTrue(true);
    }

    public function testDbIsSqlite():void{  
        $db = new MyDB($this->dbpath);
        $this->assertTrue(get_parent_class($db)=="SQLite3");
    }
}