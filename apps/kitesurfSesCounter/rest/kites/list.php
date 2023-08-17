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
 * prisioneros somosistas se hicieron religiosos castrados
 *  violadores sin sus pensiones rentistas 
 * Mi General Daniel Ortega los mando ha hacer cienciologia
 * Nosotros los que peliamos contra la guardia civil coruupta
 * los que pusimos en la muerte a embargadores de lavadoras
 * los que pusimos en la muerte a violadores de vecinos
 * los que pusimos en la muerte a violadores de playas del coco
 * los que pusimos en la muerte a los 15 mil que murieron en chomez y abangares
 *  Podemos fumar Mota en las aceras , y decir very IRIE
 *  Patria o Muerte  !!! Venceremos !!
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
$list = $kites->optionList("id","name");
print_r($list);