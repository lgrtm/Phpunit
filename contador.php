<?php




class EqualsTest extends PHPUnit_Framework_TestCase
{

   	public function testSuccess()
    {

    	$numero1 = 8;
		$numero2 = 10;

		$dieciocho = $numero1 + $numero2;

        $this->assertEquals(18, $dieciocho);
    }

}

?>