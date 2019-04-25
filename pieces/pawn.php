<?php 

	class pawn extends piece implements JsonSerializable{
 		
		private $name;
        private $image;
        private $color;

		public function __construct ($rColor) {
            $this->name = "pawn";
            $this->color = $rColor;

            if($this->color == "white"){
                $this->image = "whitepawn.png";
            }else{
                $this->image = "blackpawn.png";
            }
  		}

  		public function getName(){
		    return $this->name;
        }

        public function getImage(){
            return $this->image;
        }

        public function jsonSerialize(){
            return array($this->name, $this->image);
        }

	}

?>