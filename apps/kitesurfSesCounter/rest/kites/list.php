<?php
/**
 *                    ____
 *                 _.' :  `._
 *             .-.'`.  ;   .'`.-.
 *    __      / : ___\ ;  /___ ; \      __
 *  ,'_ ""--.:__;".-.";: :".-.":__;.--"" _`,
 *  :' `.t""--.. '<@.`;_  ',@>` ..--""j.' `;
 *       `:-.._J '-.-'L__ `-- ' L_..-;'
 *         "-.__ ;  .-"  "-.  : __.-"
 *             L ' /.------.\ ' J
 *              "-.   "--"   .-"
 *             __.l"-:_JL_;-";.__
 *          .-j/'.;  ;""""  / .'\"-.
 *        .' /:`. "-.:     .-" .';  `.
 *     .-"  / ;  "-. "-..-" .-"  :    "-.
 *  .+"-.  : :      "-.__.-"      ;-._   \
 *  ; \  `.; ;                    : : "+. ;
 *  :  ;   ; ;                    : ;  : \:
 * : `."-; ;  ;                  :  ;   ,/;
 *  ;    -: ;  :                ;  : .-"'  :
 *  :\     \  : ;             : \.-"      :
 *   ;`.    \  ; :            ;.'_..--  / ;
 *   :  "-.  "-:  ;          :/."      .'  :
 *     \       .-`.\        /t-""  ":-+.   :
 *      `.  .-"    `l    __/ /`. :  ; ; \  ;
 *        \   .-" .-"-.-"  .' .'j \  /   ;/
 *         \ / .-"   /.     .'.' ;_:'    ;
 *          :-""-.`./-.'     /    `.___.'
 *                \ `t  ._  /  bug :F_P:
 *                 "-.t-._:'
 * La Cienciologia es una secta de ciencia ficcion
 *
 * 
 * 
 *
 * @author Rolando<rolando@emptyart.xyz>
 */
include_once __DIR__."/../../../../lib/kitesurfsess/MVC/Model/Kites.php";
include_once __DIR__."/../../../../lib/kitesurfsess/BayouFalconNest.php";

$dbpath = __DIR__."/../db/kitesurfsess.db";
$kites = new Kites($dbpath);
$list = $kites->optionList();