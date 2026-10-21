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
    $data = $_GET['data'];
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    echo "「{$data}」を受け取りました";
    ?>
    <p><a href="getRequest.php">もどる</a></p>
  </div>
</body>
</html>