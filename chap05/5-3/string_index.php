<?php
$id = "Pease";
# $id = "ピース";  # 文字化け
$length = mb_strlen($id);
for ($i=0; $i<$length; $i++) {  # 0...4
  $chr = $id[$i];
  echo "{$i}-", $chr, PHP_EOL;
}
# 0-P
# 1-e
# 2-a
# 3-s
# 4-e