<?php

// Definimos los dos jugadores 

class TennisGameTest extends PhpUnit_Framework_TestCase {

	private $leftScore = 0;
	private $rightScore = 0;

	const MIN_POINTS_TO_WIN = 4;

	public function testLeftPlayerScores() {
		$this->leftScore++;
		$this->assertNotNull('leftScore'); // -> contiene un valor
		//15-30-40-W -> equivale a 1-2-3-4 puntuacion del playerl left
		//cada vez que llamemos a esta función puntua el player left
		echo $this->leftScore;
		//nos imprime el punto conseguido
	}	

	public function testRightPlayerScores() {
		$this->rightScore++;
		$this->assertNotNull('rightScore'); // -> contiene un valor
		//15-30-40-W -> equivale a 1-2-3-4 puntuacion del playerl right
		//cada vez que llamemos a esta función puntua el player right
	}	
}