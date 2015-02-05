<?php

$data = [
    'Bilbo',
    'Sam',
    5 => 'Frodo',
    'Peregrin' => [
        'Neo',
        'Trinity' => [
            'Neo',
            'Trinity'
        ],
    ],
    'oldman' => 'Gandalf',
];

echo $data['Peregrin']['Trinity'][1];

$sub = $data['Peregrin'];

var_dump($sub);

var_dump($data);
unset($data[5]);
var_dump($data);

$first = reset($data);
var_dump($first);

echo '<ul>';
foreach ($data as $key => $value) {
    echo '<li>' . $key . ' ' . $value . '</li>';
}
echo '</ul>';