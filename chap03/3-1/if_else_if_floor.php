<?php
$age = 15.7;
if ($age < 13) {
    $price = 0;
} elseif ($age <= 15) {
    $price = 500;
} else if ($age <= 19) {
    $price = 1000;
} else {
    $price = 2000;
}
echo "{$age}歳なので {$price}円です。";