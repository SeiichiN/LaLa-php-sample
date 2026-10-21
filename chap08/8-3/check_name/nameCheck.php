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
    // 文字エンコードの検証
    if (cken($_POST) === false) {
      # $_POSTがUTF-8でない場合
      $encoding = mb_internal_encoding(); # UTF-8
      $err = "Encodig error! Not " . $encoding;
      exit($err);  # 処理を止める
    }
    // HTMLエスケープ
    $_POST = es($_POST);
    ?>

    <?php
    $isError = false;
    $name = "";
    if (isset($_POST['name'])) {
      $name = trim($_POST['name']);
      if ($name === "") {
        $isError = true;  # データが空
      }
    } else {
      $isError = true;  # 'name'が送られてきていない
    }
    ?>

    <?php if ($isError === true): ?>
      <span class="error">名前を入力してください</span>
      <form method="post" action="nameCheckForm.php">
        <input type="submit" value="戻る">
      </form>
    <?php else: ?>
      <span>
        こんにちは、<?php echo $name; ?>さん
      </span>
    <?php endif; ?>
  </div>
</body>
</html>