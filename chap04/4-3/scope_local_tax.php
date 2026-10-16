<?php

function taxPrice($tanka, $kosu) {
  global $tax;
  $ryoukin = $tanka * $kosu * (1+$tax); # Warning
  var_dump($tax);
  echo "{$ryoukin}円です。";
}

$tax = 0.1;
taxPrice(tanka:250, kosu:4);
echo "税込" . $tax*100 . "%", PHP_EOL;
print_r($GLOBALS['tax']);
