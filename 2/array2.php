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




foreach ($products as $key => &$product) {
    shuffle($product);
}
var_dump($products);


foreach ($products as $key => $product) {
    $products[$key]['title'] = $product['description'];
    $products[$key]['description'] = $product['price'];
    $products[$key]['price'] = $product['title'];
}


foreach ($products as &$product) {
    $product['title'] = $product['description'];
    $product['price'] = $product['title'];
}

var_dump($products);


$a = ['a', 'b', 'c'];
$b = ['d', 'e', 'f'];
$c = array_combine($a, $b);
var_dump($c);