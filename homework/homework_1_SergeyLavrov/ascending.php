<?php
echo'<meta charset="utf-8">';

$a = 78;
$b = 153;
$c = 17;

/* if ($a > $b && $a > $c) {
    $n3 = $a;
    if ($b > $c) {
        $n2 = $b;
        $n1 = $c;
    } else {
        $n2 = $c;
        $n1 = $b;        
    }
} elseif ($b > $a && $b > $c) {
    $n3 = $b;
    if ($a > $c) {
        $n2 = $a;
        $n1 = $c;
    } else {
        $n2 = $c;
        $n1 = $a;        
    }
} else {
    $n3 = $c;
    if ($a > $b) {
        $n2 = $a;
        $n1 = $b;
    } else {
        $n2 = $b;
        $n1 = $a;        
    }    
} */
if ($a > $b && $a > $c) {
    $n3 = $a;
    compare($b, $c);
} elseif ($b > $a && $b > $c) {    
    $n3 = $b;
    compare($a, $c);
} else {
    $n3 = $c;
    compare($a, $b);
}
function compare($k1, $k2) {
     if ($k1 > $k2) {
        $n2 = $k1;
        $n1 = $k2;
    } else {
        $n2 = $k2;
        $n1 = $k1;   
    }
    echo $n1 . ' ' . $n2;
}
echo ' '. $n3;
// echo $n1 . ' ' . $n2 . ' ' . $n3;