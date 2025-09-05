<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function __construct( $height, $width, $length ) {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
  
    }

    public function volume() {
        return $this->height * $this->width * $this->length;
    }
}

$box1 = new Box(10,10,10);
$volume1 = $box1->volume();
var_dump($box1);
var_dump($volume1);

$box2 = new Box(30,40,50);
$volume2 = $box2->volume();
var_dump($box2);
var_dump($volume2);