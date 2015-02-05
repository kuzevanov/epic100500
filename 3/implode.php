<?php

$listOfStrings = [
    '  caRRot ',
    ' toMato',
    'cucumber  ',
    'poTato ',
    ' cabbAge',
];
var_dump($listOfStrings);

function format(array $list = array()) {
    foreach ($list as $key => $item) {
        $list[$key] = strtolower(trim($item));
    }
    return implode(', ', $list);
}

$result = format($listOfStrings);

var_dump($result);