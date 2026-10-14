<?php
$numArray = [];
# count(配列) -- 配列の中の要素の数、空配列ならゼロ
# 要素の数が5より小さければ繰り返す 
while (count($numArray) < 5) {
  $num = mt_rand(1, 30);
  # $numが配列の中に無かったら
  if (! in_array($num, $numArray)) {
    # 配列に$numを追加する
    #array_push($numArray, $num);
    $numArray[] = $num;
  }
}
print_r($numArray);
