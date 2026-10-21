<?php
// 文字列を受け取って、いくらかかるかを計算
// 引数: 文字列
// 戻り値: "何文字、何円" という文字列
function price(string $str): string {
  $kakaku = 3000;
  $length = strlen($str);
  if ($length > 10) {
    $kakaku += ($length - 10) * 100;
  }
  $kakaku = number_format($kakaku);
  return "{$length}文字 {$kakaku}円";
  # return $result;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
    $msg1 = "Hello World";
    $msg2 = "ハローワールド";
    echo price($msg1);
    echo "<br>" . PHP_EOL;
    echo price($msg2);
    ?>
</body>
</html>