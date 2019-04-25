<?php


class knight extends piece implements JsonSerializable{

    private $name;
    private $image;
    private $color;

    public function __construct ($rColor) {
        $this->name = "knight";
        $this->color = $rColor;

        if($this->color == "white"){
            $this->image = "whiteknight.png";
        }else{
            $this->image = "blackknight.png";
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