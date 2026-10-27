<?php
require_once('../../lib/util.php');
$gobackURL = "searchForm.html";

if (!cken($_POST)) {
  header("Location:{$gobackURL}");  # リダイレクト
  exit();  # 後の処理はキャンセル
}
# $_POST = es($_POST) はここではやらない

if (isset($_POST['name'])) {
  $name = trim($_POST['name']);
  if ($name === "") {
    header("Location:{$gobackURL}");  # リダイレクト
    exit();  # リダイレクトの後は必ずexit()
  }
} else {
  header("Location:{$gobackURL}");  # リダイレクト
  exit();  # リダイレクトの後は必ずexit()
}

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
    $name = $_POST['name'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "SELECT * FROM member WHERE name LIKE :name";
      $stm = $pdo->prepare($sql);  # SQLのセット
      $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
      $stm->execute();  # SQLの実行
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);

      if (count($result) > 0) {
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>ID</th>";
        echo "<th>名前</th>";
        echo "<th>年齢</th>";
        echo "<th>性別</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        foreach ($result as $row) {
          echo "<tr>";
          echo "<td>", es($row['id']), "</td>";
          echo "<td>", es($row['name']), "</td>";
          echo "<td>", es($row['age']), "</td>";
          echo "<td>", es($row['sex']), "</td>";
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
      } else {
        echo "名前に「{$name}」は見つかりませんでした。";
      }
    } catch (Exception $e) {
      echo '<span class="error">データベースエラー</span>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <hr>
    <p><a href="<?php echo $gobackURL; ?>">もどる</a></p>
  </div>
</body>

</html>

<!-- 修正時刻: Tue 2026/10/27 06:15:30 -->
