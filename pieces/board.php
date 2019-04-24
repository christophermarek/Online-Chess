<?php

require('piece.php');
require ('pawn.php');

	class board{
 		
		private $board;
        private $player1;
        private $player2;

        public function __construct ($rPlayer1, $rPlayer2) {

            $this->player1 = $rPlayer1;
            $this->player2 = $rPlayer2;
            //empty board
			$this->board = array(array());
			$this->populatePawnRow(1);
            $this->populatePawnRow(2);
            $this->populatePawnRow(3);
            $this->populatePawnRow(4);
            $this->populatePawnRow(5);
            $this->populatePawnRow(6);
            $this->populatePawnRow(7);
            $this->populatePawnRow(8);

  		}
  		
  		function populatePawnRow($rowNum){

            for($i = 0; $i < 8; $i++){
                $this->board[$rowNum-1][$i] = new Pawn($this->player1, "white");
            }

  		}

  		public function encodeBoard(){
            $encoded = array(array());

            for($n = 0; $n < 8; $n++){
                for($m = 0; $m < 8; $m++){
                    $encoded[$n][$m] = array($this->board[$n][$m]->getName(), $this->board[$n][$m]->getImage());
                }
            }

            echo  json_encode($encoded);
        }

  	}


  	if(isset($_GET['defaultBoard'])){
  		$newBoard = new board("matt", "jeff");

        echo $newBoard->encodeBoard();
	}
	


?>