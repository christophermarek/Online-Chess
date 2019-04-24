<?php 
	class piece {

        private $playerName;
        private $color;

        public function __construct($rName, $rColor)
        {
            $this->color = $rColor;
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

