<?php

function factorial($n) {
    if ($n > 1) {
        $f = $n * factorial($n-1);
    } else {
        $f = 1;
    }
    return $f;
}

echo factorial(5);



//5!= 5*4*3*2*1=120
