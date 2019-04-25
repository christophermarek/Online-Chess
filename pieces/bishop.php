<?php


class bishop extends piece implements JsonSerializable{

    private $name;
    private $image;
    private $color;

    public function __construct ($rColor) {
        $this->name = "bishop";
        $this->color = $rColor;

        if($this->color == "white"){
            $this->image = "whitebishop.png";
        }else{
            $this->image = "blackbishop.png";
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