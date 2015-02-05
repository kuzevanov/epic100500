<?php

$products = [
    [
        'title' => 'Розовый пони',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Плюшевый мишка',
        'description' => 'Винни-Пух',
        'price' => '200', 
        'category' => 'мёд', 
        'country' => 'Англии',
    ],
    [
        'title' => 'Чучело скунса',
        'description' => 'фууууу',
        'price' => '10', 
        'category' => 'неформат', 
        'country' => 'России',
    ],
    [
        'title' => 'Розовый пони',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Розовый пони',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Розовый пони',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Розовый пони',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
];

$total = count($products);
$limit = ceil($total / 2);
$array1 = array_slice($products, 0, $limit);
$array2 = array_slice($products, $limit, $limit - 1);

var_dump($array1, $array2);