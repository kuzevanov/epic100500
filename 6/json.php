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
$json = json_encode($data);

var_dump($data, $json);

$jsonString = '{
   "one": "A Number",
   "hello": "world",
   "myarray": ["orange", "apple", "banana"],
   "myobject": {"library": "books", "bar": "alcohol"}
}';

$data = json_decode($jsonString, true);
var_dump($jsonString, $data);
