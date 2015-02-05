<?php
echo'<meta charset="utf-8">';
function compare2integer($int1, $int2) {
    if ($int1 > $int2) {
        echo 'Первое число больше';
    } elseif ($int1 < $int2) {
        echo 'Второе число больше';
    } else {
        echo 'Числа равны';
    }
}
compare2integer(7, 7);
