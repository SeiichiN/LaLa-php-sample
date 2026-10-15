<?php
$price = 0;
$max = 6;
for ($kazu=1; $kazu<=$max; $kazu++) {
  if ($kazu <= 3) {
    $price += 1000;
  } else {
    $price += 500;
  }
  echo "{$kazu}人、{$price}円。";
}
# 1人、1000円。2人、2000円。3人、3000円。4人、3500円。5人、4000円。6人、4500円。