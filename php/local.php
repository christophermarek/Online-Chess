<?php

require('../pieces/board.php');


    class local{

        private static $board;
        private static $turn;

        public function __construct () {

            self::$board = new Board("Player1", "Player2");
            self::$turn = "white";

            //start game
            $gameFinished = false;
            while($gameFinished){
                static::$turn = "white";

            }


        }

        public function getEncodedBoard(){
            return self::$board->encodeBoard(self::$board);
        }

        public function getTurn(){
            return self::$turn;
        }

        public function getBoard(){
            return self::$board;
        }

        public function toString(){
            echo self::$board->encodeBoard(self::$board->getBoard());
        }



    }

    if(isset($_GET['start'])) {
        $newGame = new local();


    }

    if(isset($_GET['getBoard'])) {
        $newGame = new local();
        echo $newGame->getEncodedBoard();;

    }

        if(isset($_GET['turnMade'])) {

        }

        if(isset($_GET['getTurn'])){
        }