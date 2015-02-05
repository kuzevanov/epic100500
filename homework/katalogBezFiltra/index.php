<?php

include 'header.php';

$sait = array ('main', 'about', 'catalog', 'contacts');

if (isset($_GET['page'])) {
    if (in_array($_GET['page'], $sait)) {
        include_once ($_GET['page'] . '.php');
    } else {
        include_once 'page404.php';
    }
} else {
    include_once 'main.php';
}

include 'footer.php';

/* данныый вариант имеет глобальную уязвимость
так как позволяет загрузить любой файл сервера,
в том числе системный
Решение - строго ограничить список возможных страниц - например массивом или циклом.
Есть более совершенный способ. */