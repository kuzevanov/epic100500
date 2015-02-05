<?php
echo'<meta charset="utf-8">';

$m = rand(0, 100);
echo $m . '<br>';

if ($m >= 20 && $m <= 35) {
    echo 'Успех';
} else {
    echo 'Пробуй еще';
}