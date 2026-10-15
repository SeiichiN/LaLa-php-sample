<?php
# $n, $result -- ローカル変数
# 関数の実行が終わると、メモリから消える
function double($n) {
  $result = $n * 2;
  return $result;
}

$ans = double(125);
echo $ans;  # 250
