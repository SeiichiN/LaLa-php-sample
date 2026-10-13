<?php
$test1 = true;
$test2 = false;
$hantei1 = ($test1 and $test2);
$hantei2 = ($test1 or $test2);
var_dump($hantei1);  # false
var_dump($hantei2);  # true
