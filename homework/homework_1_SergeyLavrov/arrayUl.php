<?php

echo '<meta charset="utf-8">';

$ingredients = array("Дедка", "Бабка", "Внучка", "Жучка", "Кошка", "Мышка");

$i = 1;

echo '<ul>';

foreach ($ingredients as $word) {
    echo '<li>Элемент ' . $i . ' = ' . $word . '</li>';
    $i++;
}

echo '</ul>';