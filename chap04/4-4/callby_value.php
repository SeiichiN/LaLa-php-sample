<?php
# $varに渡されるのは、$numの値（コピー）
function oneUp($var) {  # 値渡し
  $var += 1;
}

# 関数の中で値を変えても同じ。
$num = 5;
oneUp($num);
echo $num;   # 5
