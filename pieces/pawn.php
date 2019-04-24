<?php 

	class pawn extends piece implements JsonSerializable{
 		
		private $name;
        private $image;

		public function __construct () {
            $this->name = "pawn";
			if($this::getColor() == "white"){
                $this->image = "whitepawn.jpg";
            }else{
                $this->image = "whitepawn.jpg";
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