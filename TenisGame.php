<?php
// Sabemos que no tenemos que utilizar comentarios o excepcionalmente
// pero esta primera vez vamos hacer una excepcion :P
// Definimos los dos jugadores 

class TennisGameTest extends PhpUnit_Framework_TestCase {

	private $leftScore = 0;
	private $rightScore = 0;

	const MIN_POINTS_TO_WIN = 4;

	public function testLeftPlayerScores() {
		// Act
		$this->leftScore++;
		// Assert
		$this->assertNotNull('leftScore'); // -> contiene un valor
		//15-30-40-W -> equivale a 1-2-3-4 puntuacion del playerl left
		//cada vez que llamemos a esta función puntua el player left
		echo $this->leftScore;
		//nos imprime el punto conseguido
	}	

	public function testRightPlayerScores() {
		// Act
		$this->rightScore++;
		// Assert
		$this->assertNotNull('rightScore'); // -> contiene un valor
		//15-30-40-W -> equivale a 1-2-3-4 puntuacion del playerl right
		//cada vez que llamemos a esta función puntua el player right
	}


	// Ahora dejamos las funciones preparadas para 
	// empezar el SUT del gameTest
	// son necesarias para pasar los test !!!

	public function LeftPlayerScores() {
		$this->leftScore++;
	}	

	public function RightPlayerScores() {
		$this->rightScore++;
	}	
}