<?php


function agePhrase($age){
    if ($age < 20) {
        return 'все впереди';
    } elseif ($age < 30) {
        return 'Самое время взяться за ум';
    } else {
        return 'У вас есть чему поучиться';
    }
}

for ($i = 1; $i <=50; $i++) {
    echo $i . ' ';
    echo agePhrase($i);
    echo '<br />';
}