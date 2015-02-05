<?php
echo'<meta charset="utf-8">';


$a = 12;
$b = 3;
$c = 5;

if ($a <= $b && $b <= $c) {
    $a *= $a;
    $b *= $b;
    $c *= $c;
} elseif ($a > $b && $b > $c) {
    $c = $b = $a;
} else {
    $a = -$a;
    $b = -$b;
    $c = -$c;
}
echo $a . ' ' . $b . ' ' . $c;