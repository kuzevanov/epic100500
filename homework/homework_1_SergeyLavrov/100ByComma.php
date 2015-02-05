<?php
echo'<meta charset="utf-8">';

for ($i = 0; $i <=100; $i++) {
    echo $i . ', ';
}

echo '<br/><br />';

$m = -1;

while ($m < 100) {
    echo ++$m . ', ';
}

echo '<br/><br />';

$n = 0;

do {
    echo $n++ . ', ';
} while ($n <= 100); 