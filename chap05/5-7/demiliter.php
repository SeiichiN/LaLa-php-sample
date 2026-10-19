<?php
$filepath = "/goods/image/eat/";
var_dump(preg_match("/\/image\//u", $filepath));
var_dump(preg_match("#/image/#u", $filepath));
# int(1)
# int(1)