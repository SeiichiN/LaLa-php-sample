<?php
$list = [20, -32, 50, -5, 40];
$count = count($list);
$sum = 0;
for ($i=0; $i<$count; $i++) { # 0 -> 4 まで
  $value = $list[$i];  # -32
  if ($value < 0) {
    $sum = "マイナスの値{$value}が含まれていたので中断しました";
    break;
  } else {
    $sum += $value;  # 20
  }
}
echo "合計：$sum"; 
# 合計：マイナスの値-32が含まれていたので中断しました