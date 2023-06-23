<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
/**
 * Transitioning the 14knots winds
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
 * USPS Visions the darmakaya of ridding a slingshot mixer kiteboard downwinding on a sunny evening ...
 * Test the main model of a future tree of resful responders for swift apps on my iWatch or iPhone
 * anticipate not to lose you twintip after jumps buy a secon hand snowboard and assert true your down hill on snowbird some day
 * alabama spirits leaving magic weed in my kitesurf spot
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