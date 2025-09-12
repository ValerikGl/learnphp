<?php

class Box {
    public $height = 0;
    private $width = 0;
    protected $length = 0;

    public static $count = 0;

    public static function cool(){
        var_dump(self::$count); 
        var_dump(self::class); 
        var_dump(static::class); 
    }

    public function __construct($height=0, $width=0, $length=0) {
        self::$count++;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function test(){
        var_dump($this->width);
    }
    public function setWidth($width){
        if(is_numeric($width) && $width > 0){
            $this->width = $width;
        } else {
            throw new Exception('width needs to be number and bigger than 0');
        }
    }

    public function volume() {
        return $this->height * $this->width * $this->length;
    }

    public function __toString() {
        return 'Im a box!';
    }
    
    public function __destruct()
    {
        var_dump('Object was destroyed!');
    }

    public function __get($name){
        var_dump("Trying to get $name");
        return 'Some cool value';
    }

    public function __set($name, $value){
        var_dump("Trying to set $name with value $value");
    }

    public function __call($name, $args){
        var_dump("Trying to call function $name with values", $args);
    }

    public static function __callStatic($name, $args){
        var_dump("Trying to call function $name with values", $args);
    }

    public function __invoke(...$args){
        var_dump('I was called as function with args', $args);
    }
}

class MetalBox extends Box {
    public $material = 'Metal🤘';
    public $weightPerUnit = 2;

    public function test(){
        var_dump($this->length);
    }

    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }
}

class IronBox extends MetalBox {
    use Colorful;

    public $material = 'Iron';
    public $weightPerUnit = 3;
}

class Cat {
    use Colorful, Smelly;
}

trait Colorful {
    public $color;

    public function setColor($color){
        $this->color = $color;
    }
}

trait Smelly {
    public $smell;
}

function makeBox(){
    $box1 = new Box();
    var_dump($box1->potato);
    var_dump($box1->asldlasdlashn);
    $box1->kakajunn = 123;
    $box1->hello(1, 2, 3);
    $box1(1, 3, 4, 5);
    echo $box1;
}
makeBox();
//unset($box1);
$box1 = 1;
var_dump('End of program');