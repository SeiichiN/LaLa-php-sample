<?php
# p83
$a = 5;
$b = "5";
$c = 5.0;

echo gettype($a);  # outputs "integer"
echo gettype($b);  # outputs "string"
echo gettype($c);  # outputs "double"

var_dump($a == $b);  # outputs true
var_dump($a === $b);  # outputs false
var_dump($a == $c);  # outputs true
var_dump($a === $c);  # outputs false
