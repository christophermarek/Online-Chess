<?php


class rook extends piece implements JsonSerializable{

    private $name;
    private $image;
    private $color;

    public function __construct ($rColor) {
        $this->name = "rook";
        $this->color = $rColor;

        if($this->color == "white"){
            $this->image = "whiterook.png";
        }else{
            $this->image = "blackrook.png";
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