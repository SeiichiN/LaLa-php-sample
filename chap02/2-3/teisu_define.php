<?php
define("TAX", 0.08);
$price = 1250 * (1+TAX);
echo $price, PHP_EOL;   // 1350
echo __FILE__, PHP_EOL;

function test() {
  define("PI", 3.14);
  echo __FUNCTION__, PHP_EOL;
}
test();
echo PI;

