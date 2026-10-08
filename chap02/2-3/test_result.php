
<?php
$kokugo = 67;
$sansu = 72;
$rika = 85;

$goukei = $kokugo + $sansu + $rika;
$heikin = round($goukei/3, 2);

echo "<p>合計：", $goukei, "</p>";
echo "<p>平均点：", $heikin, "</p>";

