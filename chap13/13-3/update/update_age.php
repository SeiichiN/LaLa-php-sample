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
      
      $sql = "UPDATE member SET age = age + 1";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      echo "<p>全員の年齢を1あげました。</p>";
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