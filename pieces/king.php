<?php


class king extends piece implements JsonSerializable{

    private $name;
    private $image;
    private $color;

    public function __construct ($rColor) {
        $this->name = "king";
        $this->color = $rColor;

        if($this->color == "white"){
            $this->image = "whiteking.png";
        }else{
            $this->image = "blackking.png";
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