<?php
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
$bigger = ($a > $b) ? $a : $b;
echo "大きな値は {$bigger}、\$aは{$a}、\$bは{$b}";
# 大きな値は 46、$aは5、$bは46
