<?php
$myArray = [
  "a" => 10,
  "d" => 40,
  "b" => 20,
  "e" => 50,
  "c" => 30,
];
$removed = array_splice($myArray, 1, 2);
echo '実行後: $myArray', PHP_EOL;
print_r($myArray);
echo '戻り: $removed', PHP_EOL;
print_r($removed);
