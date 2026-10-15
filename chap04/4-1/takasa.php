<?php
$kyori = 20;
$kakudo = 32 * pi() / 180;  # ラジアン値を求める
$takasa = $kyori * tan($kakudo); # 木の高さ
$takasa = round($takasa*10) / 10;
# $takasa = round($takasa, 1);
# 小数点第２位を四捨五入して、第１位までを求める

echo "木の高さは{$takasa}mです。";
# 木の高さは12.5mです。