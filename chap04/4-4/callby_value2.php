<?php
function oneUp($var) {
  global $num;
  $var++;
  $num = $var;
}

$num = 5;
oneUp($num);
echo $num;   # 6
