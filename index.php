<?php

for ($i = 0; $i < 10; $i++) {
    var_dump($i);
}

for ($i=10 ; $i > 0; $i--) {
    var_dump($i);
}

for ($i=1; $i < 1_000_000; $i*=2) {
    var_dump($i);
}

$current = date('s');

// while ($current < 59){
//     var_dump($current);
//     $current = (int)date('s');
// }
$i = 10;

while ($i < 10){
    var_dump('while');
}


do{
    var_dump('do while');
} while( $i < 10);

$array = [
    'name' => Valeri,
    'age' => 18,
    'isMale' => true,
];
foreach ($array as $key => $value) {
    var_dump($key, $value);
}