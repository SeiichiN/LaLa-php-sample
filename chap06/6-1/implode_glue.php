<?php
$data = ["赤井一郎", "伊藤　淳", "上野信二"];
$glue = "さん、";
$nameList = implode($glue, $data);
$nameList .= "さん";
print_r($nameList);
# 赤井一郎さん、伊藤　淳さん、上野信二さん
