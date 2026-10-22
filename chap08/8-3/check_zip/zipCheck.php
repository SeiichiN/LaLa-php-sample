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
    $zip = "";
    if (isset($_POST['zip'])) {
      $zip = trim($_POST['zip']);
      $pattern = "/^\d{3}-\d{4}$/";
      if (!preg_match($pattern, $zip)) {
        $errors[] = "郵便番号が不正です。";
      }
    } else {
      $errors[] = "郵便番号が送られてきていません";
    }
    ?>
    <?php
    if (count($errors) > 0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>{$value}</li>";
      }
      echo '</ol>';
    } else {
      echo "郵便番号は {$zip} です。";
    }
    ?>

    <form method="post" action="zipCheckForm.php">
      <ul>
        <li><input type="submit" value="戻る"></li>
      </ul>
    </form>
  </div>
</body>
</html>