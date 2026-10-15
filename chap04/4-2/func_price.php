<?php
$kingaku1 = price(2400, 2);  # 送料必要
$kingaku2 = price(1200, 5);  # 送料はサービス
echo "金額1は{$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額2は{$kingaku2}円";

function price($tanka, $kosu) {
  $souryo = 250;
  $ryoukin = $tanka * $kosu;
  if ($ryoukin < 5000) {
    $ryoukin += $souryo;
  }
  return $ryoukin;
}

