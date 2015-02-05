<?php
echo'<meta charset="utf-8">';

for ($i = 0; $i <= 100; $i++) {
    echo $i . '<br />';
}

echo '----Цикл FOR завершен<br />';

$m = 0;

while ($m <= 100) {
    echo $m++ . '<br />';
}

echo '---- Цикл WHILE завершен<br />';

$n = 0;

do {
    echo $n++ . '<br />';
} while ($n <= 100);

echo '----Цикл DO-WHILE завершен';