<html>
  <body>
    <?php
    $age = 25;
    if ($age<=15) {
      echo "<p>15歳以下の料金は500円です。</p>";
    } elseif ($age<=19) {
      echo "<p>16歳から19歳は2,000円です。</p>";
    } else {
      echo "<p>20歳以上の大人は2,500円です。</p>";
    }
    ?>
  </body>
</html>