<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function volume() {
        return $this->height * $this->width * $this->length;
    }
}

$box1 = new Box();
$box1->height = 10;
$box1->width = 10;
$box1->length = 10;
$volume1 = $box1->volume();
var_dump($box1);
var_dump($volume1);

$box2 = new Box();
$box2->height = 5;
$box2->width = 5;   
$box2->length = 5;
$volume2 = $box2->volume();
var_dump($box2);
var_dump($volume2);