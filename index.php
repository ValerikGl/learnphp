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

  public function setWidth($width) {
    if(is_numeric($width) && $width > 0) {
      $this->width = $width;
    } else {
      throw new Exception("Width must be a positive number.");
    }
  }

    public function volume() {
        return $this->height * $this->width * $this->length;
    }
}

class MetalBox extends Box {
    public $material = "Metal";
    public $weightPerUnit = 2;

    public function weight() {
        return $this->volume() * $this->weightPerUnit;
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

$metalBox = new MetalBox(10,20,40);
var_dump($metalBox);
var_dump($metalBox->volume());
var_dump($metalBox->weight());

class IronBox extends MetalBox {
    public $material = "Iron";
    public $weightPerUnit = 3;
}