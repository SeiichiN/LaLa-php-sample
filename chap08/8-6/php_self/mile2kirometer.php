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
      exit("Encode Error!");
    }
    $_POST = es($_POST);
    ?>
    <?php
    if (isset($_POST['mile'])) {
      $isNum = is_numeric($_POST['mile']);
      if ($isNum) {
        $mile = $_POST['mile'];
        $error = "";
      } else {
        $mile = "";
        $error = '<span class="error">←数値を入力してください</span>';
      }
    } else {
      // 最初にこのページを開いたとき
      $isNum = false;
      $mile = "";
      $error = "";
    }
    ?>
    <!-- <form method="post" action=""> -->
    <form method="post" action="<?php echo es($_SERVER['PHP_SELF']); ?>">
      <ul>
        <li>
          <label>マイルをkmに換算：
            <input type="text" name="mile" value="<?php echo $mile; ?>">
          </label>
          <?php echo $error; ?>
        </li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
    <?php
    if ($isNum) {
      echo "<hr>";
      $kilometer = $mile * 1.609344;
      echo "{$mile}マイルは {$kilometer}km です。";
    }
    ?>
  </div>
</body>
</html>