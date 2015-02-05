<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8" />
</head>
<body>

<?php
session_start();
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
        'title' => 'Розовый пони1',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Розовый пони2',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Розовый пони3',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
    [
        'title' => 'Розовый пони4',
        'description' => 'Это же розовый пони!',
        'price' => '100', 
        'category' => 'неформат', 
        'country' => 'Никарагуа',
    ],
];

echo '<ul>';
foreach ($products as $key => $product) {
    echo '<li>'; 
    echo $product['title']; 
    echo ' <a href="?id=' . $key . '">В корзину</a>';
    echo '</li>';
}
echo '</ul>';

$id = isset($_GET['id']) ? $_GET['id'] : null;
if (is_numeric($id) && $id < count($products)) {
    $_SESSION['products'][$id] = $products[$id];

}

echo "<h2>Корзина</h2>";
echo '<ul>';
foreach ($_SESSION['products'] as $product) {
    echo '<li>'; 
    echo $product['title']; 
    echo ' <a href="">Удалить из корзины</a>';
    echo '</li>';
}
echo '</ul>';

?>
</body>
</html>
