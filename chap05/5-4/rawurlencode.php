<?php
$page = "PHP 8サンプル.html";
$path = rawurlencode($page);
$url = "http://localhost:3000/{$path}";
echo $url;
# http://sample.com/PHP%208%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB.html
?>
<a href="<?= $url ?>">PHP 8サンプル.html</a>