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
 * Tu pum pum mami mami no me van matar                                                   =
 * Pues tu pum pum no me puede mataran
 * A mamacita porque soy un general digo que
 * Jala palante y digo jala pa la trasan san
 * Tu pum pum digo se pasan es tiran
 * Digo todos los hombres lo van corretear pum
 * Como una bruja lo tendrán que castigar
 * Tu pum pum mami mami no me van matar
 *Pues conozco a chicas que les gustan firmaran
 *Vienen pa el baila y ella no quieren bailaran
 *Con mi amigos si no llevan collaran
 * El no maneja ningún Honda acuran
 *Y la cerveza no le pueden comprar digo todo lo quieres un pasito pa gozaran
 *Porque del baile no la puede sacaran
 *tu pum pum mami mami no me van matar
*yo soy branvon digo que bravo no me gana 
*bravo y malo y digo que no me 
*por eso escuchan es a cosa que les voy a pronosticar 
*digo el pum pum digo tiene que pegaran 
*en Puerto Rico digo tiene que llegaran 
*Santo Domingo digo tiene que llegaran 
*en Jamaica digo tiene que azotaran 
*Costa Rica y en Panaman 
*toda mi gente se lo van a gozar 
*tu pum pum mami mami no me van matar 
 * 
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once '/Users/rolando/Documents/Projects/cookieMonster2/lib/kitesurfsess/BayouFalconNest.php';

final class MainTest extends TestCase{

    private $dbpath = "/Users/rolando/Documents/Projects/cookieMonster2/apps/kitesurfSesCounter/db/kitesurfsessdb.db";
    
    protected function setUp():void
    {
        //echo "hepppre";
    }

    public function testWeCanTest(): void
    {
        $this->assertTrue(true);
    }

    public function testDbIsSqlite():void{  
        $db = new BayouFalconNest($this->dbpath);
        $this->assertTrue(get_parent_class($db)=="SQLite3");
    }

    public function testDbHasKitesTable(){

    }

    public function testInsertAKiteIncrementsKitesTableCount(){

    }

    public function testKiteModelExist(){

    }

    public function testKiteModelHasOptionListMethod(){
        
    }
}