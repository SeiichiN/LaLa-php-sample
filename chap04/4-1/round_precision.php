<?php
$value = 123.456;
$num1 = round($value);
$num2 = round($value, 2); # 小数点第３位を四捨五入
$num3 = round($value, -1); # 1の位で四捨五入
var_dump($num1); # float(123)
var_dump($num2); # float(123.46)
var_dump($num3); # float(120)



