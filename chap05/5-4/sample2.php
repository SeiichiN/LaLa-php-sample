<html>

<body>
  <?php
  $word = $_POST['word'];
  # echo $word;
  echo htmlspecialchars($word, ENT_QUOTES, "UTF-8");
  ?>
  <a href="sample.html">もどる</a>
</body>

</html>