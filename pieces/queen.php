<?php


class queen extends piece implements JsonSerializable{

    private $name;
    private $image;
    private $color;

    public function __construct ($rColor) {
        $this->name = "queen";
        $this->color = $rColor;

        if($this->color == "white"){
            $this->image = "whitequeen.png";
        }else{
            $this->image = "blackqueen.png";
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