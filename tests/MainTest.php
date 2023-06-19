<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
/**
 *    %%%
 *   =====
 *  &%&%%%&
 *  %& < <% 
 *   &\__/
 *    \ |____
 *   .', ,  ()
 *  / -.  _)| 
 * |_(_.    |
 * '-'\  )  |
 * mrf )    |
 *    /  .  ).
 *   /    _. |
 * /'---':.-'|
 *(__.' /    /
 * \   ( /  /
 *  \ /  _  | 
 *   \  |  '|
 *   | . \  |
 *   |(     | 
 *   |  \ \ |
 *    \  )\ |
 *   __)/ / \
 *--"--(_.Ooo'----
 *
 * La Teta De Mondongui, visiones de los tiemps de miguel angel rodriguez
 * Michael Maher desaparecio, Avantica desaparecio, muertos de hambre de sykes
 * En un mitin de la Anep retaguardia en la clinica marcial fallas
 * gas zarin sin antidoto que nos dio kadafi
 */
final class MainTest extends TestCase
{
    public function testWeCanTest(): void
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}