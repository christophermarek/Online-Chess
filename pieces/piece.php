<?php


	class piece {

        private $playerName;

        public function __construct($rName)
        {
            $this->playerName = $rName;

        }


        public function getName(){
            return $this->playerName;
        }

        public function getColor(){
            return $this->color;
        }

    }
?>

