<?php

require_once __DIR__ . '/../scr/TenisGame.php'

class GameBoardTest extends PhpUnit_Framework_TestCase {

	private $game;


	public function SetUp() {
	$this->game = new TenisGame;
	}


	public function testGameIsNotFinishedOn_15_0(){

		$this->game->leftPlayerScores();

	}

	public function testLeftPlayerScoresOnce()
	{
		// Arrange como sutter
		$game = new TenisGame;
		
		// Act
		$game->leftPlayerScores();

		// Assert
		$this->assertEquals(1, $game->isFinished())
		$this->assertEquals(1, $game->getLeftScore())
	}



	public function testGameDoesNotFinishOnAdvance() {
		//arrange

		$this->leftPlayerScoresTimes(3);
		$this->rightPlayerScoresTimes(3);

		//Ac
		this->leftPlayerScores();

		//Assert
		$this->assrtFalse($this->game->isFinished());
	}

	private function leftPlayerScoresTimes($times) {
	for ($i=0; $i<$times; $i++)
	{
		$this->game->leftPlayerScores();
	}
}


















