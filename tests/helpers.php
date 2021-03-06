<?php
/*
 * This file is part of the GetOptionKit package.
 *
 * (c) Yo-An Lin <cornelius.howl@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

function ok( $v , $msg = null )
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertTrue( $v ? true : false , $msg );
}

function not_ok( $v , $msg = null )
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertFalse( $v ? true : false , $msg );
}

function is( $expected , $v , $msg = null )
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertEquals( $expected , $v , $msg );
}

function is_class( $expected , $v , $msg = null )
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertInstanceOf( $expected , $v , $msg );
}

function count_ok( $expected,$v, $msg = null ) 
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertCount( $expected , $v , $msg );
}


function like( $e, $v , $msg = null )
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertRegExp($e,$v,$msg);
}

function is_true($e,$v,$msg = null)
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertTrue($e,$v,$msg);
}

function is_false($e,$v,$msg= null)
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertFalse($e,$v,$msg);
}

function file_equals($e,$v,$msg = null)
{
    $stacks = debug_backtrace( DEBUG_BACKTRACE_PROVIDE_OBJECT ); # XXX: limit is only availabel in PHP5.4
    $testobj = $stacks[1]['object'];
    $testobj->assertFileEquals($e,$v,$msg);
}

function dump($e)
{
    var_dump($e);
    ob_flush();
}


