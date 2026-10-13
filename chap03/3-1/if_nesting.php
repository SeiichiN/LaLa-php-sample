<?php
$sugaku = 45;
$eigo = 67;
if ($sugaku >= 60) {
  if ($eigo >= 60) {
    echo "英語も数学も合格です";
  } else {
    echo "数学は合格だけど、英語が不合格です";
  }
} else {
  echo "数学が不合格です";
}