<?php
$colorNumber = mt_rand(0, 5);
$colorName = match($colorNumber) {
  0 => "青",
  1, 2 => "緑",
  3 => "黒",
  default => "白",
};
echo "{$colorNumber}番は{$colorName}色です";
