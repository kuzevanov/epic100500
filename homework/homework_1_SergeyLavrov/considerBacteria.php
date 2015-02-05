<?php

echo '<meta charset="utf-8">';

$n = 10;
$m = 1000000;

$i = 1;

do {
$k = $n * 2;
echo $i . ' часа - уже есть ' . $k . ' бактерий<br />';
$i++;
$n = $k;
} while ($k <= $m);