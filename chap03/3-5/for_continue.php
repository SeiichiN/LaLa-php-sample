<?php
$list = [20, -32, 50, -5, 40];
$count = count($list);
$sum = 0;
for ($i=0; $i<$count; $i++) { # 0 -> 4 まで
  $value = $list[$i];  # 40
  if ($value < 0) {
    continue;
  } 
  $sum += $value;  # 110
  
}
echo "合計：$sum"; 
# 合計：マイナスの値-32が含まれていたので中断しました