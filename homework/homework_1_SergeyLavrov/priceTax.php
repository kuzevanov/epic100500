<?php

echo '<meta charset="utf-8">';

function fullPrice($p, $t) {
    $pt = $p + $p * ($t/100);
    return $pt;
}



$price = 200;
$tax = 18;

echo fullPrice($price, $tax);