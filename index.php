<?php

$bool = true && false;
var_dump($bool); 

$bool = true || false;
var_dump($bool);

$bool = !true;
var_dump($bool);

$bool = !false;
var_dump($bool);

$bool = 10 > 5;
var_dump($bool);

$bool = 10 == 10;
var_dump($bool);

$sbool = 10 != 10;
$sbool = 10 !== 10;

$bool = (true && false || true && !false) && true;
var_dump($bool);