<?php
// キャスト演算子を使う(int型のキャスト)

$num = "23";
$a = (int)$num;
var_dump($a);   # int(23)

$num2 = "23.6";
$b = (float)$num2;
var_dump($b);  # float(23.6)

