<?php
# p83
$a = 5;
$b = (int) "5";
$c = (int) 5.0;

echo gettype($a);  # outputs "integer"
echo gettype($b);  # outputs "integer"
echo gettype($c);  # outputs "integer"

var_dump($a == $b);  # outputs true
var_dump($a === $b);  # outputs false
var_dump($a == $c);  # outputs true
var_dump($a === $c);  # outputs false
