<?php
# $varに渡されるのは、$numの参照（アドレス）
function oneUp(&$var) {  # 参照渡し
  $var += 1; # アドレスの中のデータに１足す
}

$num = 5;
oneUp($num);
echo $num;   # 6
