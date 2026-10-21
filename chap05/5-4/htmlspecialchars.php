<?php
$msg = "東京<->京都 'Eat & Run' ツアー";
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
  # echo $msg;
  echo htmlspecialchars($msg, ENT_QUOTES, "UTF-8");
  ?>
</body>
</html>
