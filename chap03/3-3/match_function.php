<?php
// 夜9時以降だと、500円アップ
function diner(int $total) {
  $time = date("G", time());
  if ($time>=21) {
    $total += 500;    
  }  
  return $total;
}

$course = "B";
$price = match($course) {
  "A" => diner(2800),
  "B" => diner(4000),
};
$now = date("G:i", time());
echo "{$course}コースは {$price}円。";



