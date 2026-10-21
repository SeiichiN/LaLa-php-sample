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
      $data = "<東京>";
      $data = urlencode($data);
      echo $data, "<br>";
      $url = "checkData.php";
      echo "<a href={$url}?data={$data}>", "送信する", "</a>";
    ?>
  </div>
</body>
</html>