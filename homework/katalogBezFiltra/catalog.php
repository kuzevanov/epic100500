<h1>Каталог</h1>
<p>----------------------------------</p>


<?php

// количество товара определяется из массива $goods
include_once 'goods.php';
$number_of_goods = count($goods);


// Формируем массив из типов категорий товаров
foreach ($goods as $key1 => $val_1) {
//    echo $key1 .' => ' . $val_1 . '<br />';
    foreach ($val_1 as $key => $val_2) {
        // Создаем массив из типов категорий товара
        if ($key == 'category') {
        $categoryList_full[] = $val_2;
        }
    }
}
unset($val_1);
unset($val_2);
// Убираем повторяющиеся значения и сбрасываем ключи от родительского цикла с дублями
$categoryList = array_values(array_unique( $categoryList_full, $sort_flags = SORT_REGULAR ));

// Устанавливаем количество категорий товара
$number_of_category = count($categoryList);

// кол-во товаров на странице
if (!isset($_GET['on_page'])) {
    $goods_on_page = 2;
} else {
    $goods_on_page = $_GET['on_page'];
}


// форма, определяющая количество товара на странице и фильтр
echo '<form method="get" action="index.php"><input type="hidden" name="page" value="catalog">';
// Определяет, сколько будет выводится товарных позиций на страницу
echo '<select size="1" name="on_page">';
echo '<option disabled selected>Товаров на странице</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option>';
echo '</select><input type="submit" value="OK">';
// Фильтр по категории товара
echo '<select size="1" name="what_category">';
echo '<option value="all">Все</option>';
    // Формируем список категорий
    for ($i = 0; $i <= $number_of_category - 1; $i++) {
        echo '<option value="' . $categoryList[$i] . '">' . $categoryList[$i] . '</option>';
    }
echo '</select><input type="submit" value="OK">';
echo '</form></p>';

// Выбранная категория
if (!isset($_GET['what_category'])) {
    //Если ничего не выбрано - показываем все категории
    $category_to_show = 'all';
} else {
    $category_to_show = $_GET['what_category'];
}


// кол-во страниц товара
$number_of_pages = ceil($number_of_goods / $goods_on_page);


// Проверяет, что на страницу будет выводится товаров не более, чем максимальное число товаров
if ($goods_on_page > $number_of_goods) {
$goods_on_page = $number_of_goods;
}

// Проверка ввода номера страницы
if (isset($_GET['pageNumber'])) {
    $pageNumber = ($_GET['pageNumber']);
} else {
    $pageNumber = 1;
}

// стиль номера страницы в пагинаторе для неактивной ссылки (текущей страницы)
$disableA = 'style="pointer-events: none; cursor: default; color: #000; text-decoration: none;"';

// Вывод пагинатора
echo '<ul>';
// вывод стрелок "назад"
if ($pageNumber > 1) {
    echo '<li class="paginator"><a href="?page=catalog&pageNumber=' . ($pageNumber - 1) . '&on_page=' .  $goods_on_page . '"><< Предыдущая страница</a></li>';
} else {
     echo '<li class="paginator"><a style="visibility: hidden" href="?page=catalog&pageNumber=' . ($pageNumber - 1) . '&on_page=' .  $goods_on_page . '"><< Предыдущая страница</a></li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
    // Формирование пагинатора
    if ($i == $pageNumber) {
        // Неактивная ссылка текущей страницы
        echo '<li class="paginator"><a ' . $disableA . ' href="?page=catalog&pageNumber=' . $i . '&on_page=' .  $goods_on_page . '">' . $i . '</a></li>';
    } else {
        if ($i == 1 || $i == $number_of_pages || $i == ($pageNumber - 1) || $i == ($pageNumber + 1)) {
            // Активные ссылки страниц
            echo '<li class="paginator"><a href="?page=catalog&pageNumber=' . $i . '&on_page=' .  $goods_on_page . '">' . $i . '</a></li>';
        } else {
            // Невыводимые ссылки
            if ($i <= $pageNumber) {
                // ... до текущей страницы
                while ($j < 1) {
                   echo ' ...';
                   $j = 1;
                }
            } else {
                // ... после текущей страницы
                while ($k < 1) {
                   echo ' ... ';
                   $k = 1;
                }
            }
        }
    }
}
// вывод стрелок "вперед"
if ($pageNumber < $number_of_pages) {
    echo '<li class="paginator"><a href="?page=catalog&pageNumber=' . ($pageNumber + 1) . '&on_page=' .  $goods_on_page . '">Следующая страница >></a></li>';
} else {
     echo '<li class="paginator"><a style="visibility: hidden" href="?page=catalog&pageNumber=' . ($pageNumber + 1) . '&on_page=' .  $goods_on_page . '">Следующая страница >></a></li>';
}
echo '</ul>';

echo '<br />'; 



// выводит заданное число товаров на заданную страницу
$goods_page_x = array_slice($goods, ($pageNumber-1)*$goods_on_page, $goods_on_page);
echo '<img src="' . current($goods_page_x)['image'] . '" alt="товар" /><h2>' . current($goods_page_x)['title'] . '</h2><div class="good_parameters_price">' . current($goods_page_x)['price'] . '</div>';
echo'<div class="good_parameters"><p>Категория:</p><p>Описание:</p><p>Страна:</p><p>Производитель:</p></div>';
echo '<div class="good_parameters"><p>' . current($goods_page_x)['category'] . '</p><p>' . current($goods_page_x)['description'] . '</p><p>' . current($goods_page_x)['country'] . '</p><p>' . current($goods_page_x)['company'] . '</p></div><div class="nofloat"></div>';
for ($i = 2; $i <= $goods_on_page; $i++) {
    if (next($goods_page_x)) {
        // проверка наличия +1 элемента массива
        // next в условии if передвигает внутренний указатель массива на одну позицию вперёд
        echo '<img src="' . current($goods_page_x)['image'] . '" alt="товар" /><h2>' . current($goods_page_x)['title'] . '</h2><div class="good_parameters_price">' . current($goods_page_x)['price'] . '</div>';
        echo '<div class="good_parameters"><p>Категория:</p><p>Описание:</p><p>Страна:</p><p>Производитель:</p></div>';
        echo '<div class="good_parameters"><p>' . current($goods_page_x)['category'] . '</p><p>' . current($goods_page_x)['description'] . '</p><p>' . current($goods_page_x)['country'] . '</p><p>' . current($goods_page_x)['company'] . '</p></div><div class="nofloat"></div>';
    } else {
        break;
    }
}


        







echo '<br />'; 

// Вывод дублирующего пагинатора
// Вывод пагинатора
echo '<ul>';
// вывод стрелок пагинатора назад
if ($pageNumber > 1) {
    echo '<li class="paginator"><a href="?page=catalog&pageNumber=' . ($pageNumber - 1) . '&on_page=' .  $goods_on_page . '"><< Предыдущая страница</a></li>';
} else {
     echo '<li class="paginator"><a style="visibility: hidden" href="?page=catalog&pageNumber=' . ($pageNumber - 1) . '&on_page=' .  $goods_on_page . '"><< Предыдущая страница</a></li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
    // Формирование пагинатора
    if ($i == $pageNumber) {
        // Неактивная ссылка текущей страницы
        echo '<li class="paginator"><a ' . $disableA . ' href="?page=catalog&pageNumber=' . $i . '&on_page=' .  $goods_on_page . '">' . $i . '</a></li>';
    } else {
        if ($i == 1 || $i == $number_of_pages || $i == ($pageNumber - 1) || $i == ($pageNumber + 1)) {
            // Активные ссылки страниц
            echo '<li class="paginator"><a href="?page=catalog&pageNumber=' . $i . '&on_page=' .  $goods_on_page . '">' . $i . '</a></li>';
        } else {
            // Невыводимые ссылки
            if ($i <= $pageNumber) {
                // ... до текущей страницы
                while ($j1 < 1) {
                   echo ' ...';
                   $j1 = 1;
                }
            } else {
                // ... после текущей страницы
                while ($k1 < 1) {
                   echo ' ... ';
                   $k1 = 1;
                }
            }
        }
    }
}
// вывод стрелок пагинатора вперед
if ($pageNumber < $number_of_pages) {
    echo '<li class="paginator"><a href="?page=catalog&pageNumber=' . ($pageNumber + 1) . '&on_page=' .  $goods_on_page . '">Следующая страница >></a></li>';
} else {
     echo '<li class="paginator"><a style="visibility: hidden" href="?page=catalog&pageNumber=' . ($pageNumber + 1) . '&on_page=' .  $goods_on_page . '">Следующая страница >></a></li>';
}
echo '</ul>';

?>