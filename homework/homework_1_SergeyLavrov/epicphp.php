<?php
echo 'я код';
$name = "Sergey";
echo 'Hello, ' . $name . '! <br>';
//комментарии
/* многострочный 
комментарий */
# одностр коммент, но после закр тега исполнит  echo 'it is really so';

$yourAge = 10;

if ($yourAge > 20) {
    if ($yourAge > 30) {
        echo 'У вас есть чему поучиться, ' . $name;
    } else {
        echo 'Самое время взяться за ум, ' . $name;
    }
} else {
    echo 'У вас все впереди, ' . $name;
}

