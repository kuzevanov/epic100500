<?php
$now  = time();
$future = mktime(0, 0, 1, 7, 14, 2015);
$diff = $future - $now;

echo "<br />";
echo $diff / 60 / 60 / 24;
echo "<br />";



echo date('Y-m-d h:i:s A', $now);
date_default_timezone_set('America/New_York');
echo "<br />";
echo date('Y-m-d h:i:s A', $now);

echo "<br />";
$date  = time() - 7*24*60*60;

echo date('Y-m-d H:i:s', $date);

echo "<br />";
echo 'Year is ' . date('Y');

echo "<br />";
    
echo strftime(" in English is %A,");
setlocale(LC_TIME, "de_DE");
echo "<br />";
echo strftime(" in German is %A,");
setlocale(LC_TIME, "ru_RU");
echo "<br />";
echo strftime(" in Russian is %A,");



