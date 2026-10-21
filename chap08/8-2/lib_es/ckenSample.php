<?php
require_once('lib/util.php');
$utf8_string = "こんにちは";
$sjis_string = mb_convert_encoding($utf8_string, 'Shift_JIS');
$sjis_array = [$sjis_string];
$encoding = mb_internal_encoding(); # システムの文字コード
if (cken($sjis_array)) {
  echo '配列の値は、', $encoding, "です";
} else {
  echo '配列の値は、', $encoding, "ではありません";
}
