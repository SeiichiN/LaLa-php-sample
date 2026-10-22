<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
  <div>
    <?php
    require_once('../../lib/util.php');
    if (!cken($_POST)) {
      $encoding = mb_internal_encoding();
      $err = "Encoding Error: Not " . $encoding;
      exit($err);
    }
    $_POST = es($_POST);
    ?>
    <?php
    $errors = [];
    ?>
    <?php
    if (isset($_POST['goukei'])) {
      $goukei = $_POST['goukei'];
      if (!ctype_digit($goukei)) {
        $errors[] = "合計金額を整数で入力してください";
      }
    } else {  // 36行目
      $errors[] = "合計金額が送信されていません";
    }

    if (isset($_POST['ninzu'])) {
      $ninzu = $_POST['ninzu'];
      if (!ctype_digit($ninzu)) {
        $errors[] = "人数を整数で入力してください";
      } else if ($ninzu == 0) {
        $errors[] = "0人では割れません";
      }
    } else {
      $errors[] = "人数が送信されていません";
    }
    ?>
    <?php
    if (count($errors) > 0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>{$value}</li>";
      }
      echo '</ol>';
    ?>
      <form method="post" action="warikanForm.php">
        <ul>
          <li><input type="submit" value="もどる"></li>
        </ul>
      </form>
    <?php  # L73
    } else {  # L74
      $amari = $goukei % $ninzu;
      $price = ($goukei - $amari) / $ninzu;
      $goukei_fmt = number_format($goukei);
      $price_fmt = number_format($price);
      echo "{$goukei_fmt}円を{$ninzu}人で割り勘します。<br>";
      echo "１人あたり{$price_fmt}円を支払えば、不足分は{$amari}円です。";
    }   # L84
    ?> <?php # L85 ?>
  </div>
</body>

</html>