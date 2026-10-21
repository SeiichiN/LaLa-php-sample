<?php
function twice(float $var): int {
  $var *= 2;
  var_dump($var);  # 21.6
  return $var;     # 21
}

$num = 10.8;
$result = twice($num);
echo "{$num}の2倍は", $result;
# float(21.6)
# 10.8の2倍は21
