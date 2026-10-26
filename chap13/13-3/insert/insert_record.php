<?php
require_once('../../lib/util.php');
$user = 'testuser';
$password = 'testuser';
$dbName = 'testdb';
$host = 'localhost:3306';
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>

<body>
  <div>
    <?php
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      $sql = "INSERT member (name, age, sex) VALUES
              ('菅田光子', 31, '女'),
              ('高田久美子', 44, '女'),
              ('青柳次郎', 35, '男')";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      echo "<p>データを追加しました。</p>";
      echo '<a href="base.php">一覧表示</a>';
    } catch (Exception $e) {
      echo '<span class="error">データベースエラー</span>';
      echo $e->getMessage();
      exit();
    }
    ?>
  </div>
</body>

</html>