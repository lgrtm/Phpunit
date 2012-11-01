<?php

// integrandolo en github

echo "testing phpunit";

class StackTest extends PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));
        
        // subimos al array foo
        array_push($stack, 'foo');
        // comprobamos que el ultimo valor del array es foo
        $this->assertEquals('foo', $stack[count($stack)-1]);
        // comprobamos que un valor en el array
        $this->assertEquals(1, count($stack));
        // eliminamos el valor foo del array
        $this->assertEquals('foo', array_pop($stack));
        // comprobamos que el array esta vacio
        $this->assertEquals(0, count($stack));
   }
}

?>