<?php
# 関数の中で変化した値を取り込みたい
function oneUp($var) {  
  $var += 1;
  return $var;
}

$num = 5;
$num = oneUp($num);
echo $num;   # 5
