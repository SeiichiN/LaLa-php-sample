<?php

function test() {
  $a = 13;    // ローカル変数
  echo $a, "\n";
}

$a = 2;
test();
echo $a;    // グローバル変数

if ($a === 2) {
  echo $a;  // 2
}