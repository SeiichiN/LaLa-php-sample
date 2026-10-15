<?php
function warikan($total, $ninzu) {
  if ($ninzu <= 0) { return; }
  $result = $total / $ninzu;
  echo "{$total}円を{$ninzu}人で分けると{$result}円。";
  echo "<br>" . PHP_EOL;
}

warikan(2500, 2);  # 2500円を2人で分けると1250円。<br>
warikan(3000, 0);
warikan(5500, 4);  # 5500円を4人で分けると1375円。<br>
