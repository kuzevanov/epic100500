<?php
echo'<meta charset="utf-8">';

$n = 5;
$m = 17;
$k = 5;

if ($n > $m && $m > $k || $n < $m && $m < $k) {
    echo $m . ' среднее между ' . $n . ' и ' . $k;
} elseif ($m > $n && $n > $k || $m < $n && $n < $k) {
    echo $n . ' среднее между ' . $m . ' и ' . $k;
} elseif ($m > $k && $k > $n || $m < $k && $k < $n) {
    echo $k . ' среднее между ' . $m . ' и ' . $n;
} else {
    echo 'Ошибка';
}

