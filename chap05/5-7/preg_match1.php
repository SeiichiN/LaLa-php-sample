<?php
$result1 = preg_match("/46-49/u", "確か49-46でした");
$result2 = preg_match("/46-49/u", "たぶん46-49だった");
$result3 = preg_match("/46-49u", "41-49かな？");

# error_reporting(0);
var_dump($result1);   # int(0)
var_dump($result2);   # int(1)
var_dump($result3);   # bool(false)

if ($result2) {
  echo "マッチしました", PHP_EOL;
}