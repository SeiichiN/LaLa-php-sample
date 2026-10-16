<?php
function countUp() {
  static $count = 0;
  $count += 1;
  return $count;
}

for ($i=1; $i<=10; $i++) {
  $num = countUp();
  echo "{$num}回目。";
}
# 1回目。2回目。3回目。4回目。5回目。6回目。7回目。8回目。9回目。10回目。