<?php

require('piece.php');
require ('pawn.php');
require ('king.php');
require ('queen.php');
require ('knight.php');
require ('bishop.php');
require ('rook.php');


	class board{
 		
		private $board;
        private $player1;
        private $player2;

        public function __construct ($rPlayer1, $rPlayer2) {

            $this->player1 = $rPlayer1;
            $this->player2 = $rPlayer2;
            //empty board
			$this->board = array(array());

			$this->populatePlayerRow(1, "white");
            $this->populatePawnRow(2, "white");
            $this->populatePawnRow(3, "white");
            $this->populatePawnRow(4, "white");
            $this->populatePawnRow(5, "black");
            $this->populatePawnRow(6, "black");
            $this->populatePawnRow(7, "black");
            $this->populatePlayerRow(8, "black");
  		}


  		function populatePawnRow($rowNum, $color){

            for($i = 0; $i < 8; $i++){
                $this->board[$rowNum-1][$i] = new Pawn($color);
            }

  		}

        function populatePlayerRow($rowNum, $color){

            $this->board[$rowNum-1][0] = new Rook($color);
            $this->board[$rowNum-1][1] = new Knight($color);
            $this->board[$rowNum-1][2] = new Bishop($color);
            $this->board[$rowNum-1][3] = new Queen($color);
            $this->board[$rowNum-1][4] = new King($color);
            $this->board[$rowNum-1][5] = new Bishop($color);
            $this->board[$rowNum-1][6] = new Knight($color);
            $this->board[$rowNum-1][7] = new Rook($color);

        }

  		public function encodeBoard($eBoard){
            $encoded = array(array());

            for($n = 0; $n < 8; $n++){
                for($m = 0; $m < 8; $m++){
                    $encoded[$n][$m] = array($eBoard->board[$n][$m]->getName(), $eBoard->board[$n][$m]->getImage());
                }
            }

            return  json_encode($encoded);
        }



  	public function decodeBoard(){
        return null;
    }




}
	


?>