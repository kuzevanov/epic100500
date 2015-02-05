<?php
phpinfo();
$str = 'lkjsa aoiqwe  йцукук qowiej  dfs  pweoi zxmcnd';
var_dump($str);
$words = explode(' ', $str);

$evenWords = 0;
foreach ($words as $key => $value) {
    if (empty($value)) {
        unset($words[$key]);
        continue;
    }
    $length = mb_strlen($value, 'utf-8');
    if ($length % 2 == 0) {
        $evenWords++;
    }
}
var_dump($evenWords, $words);

$emptyArray = [''];
var_dump($words, $emptyArray);
$words = array_diff($words, $emptyArray);
var_dump($words);

$totalWordsCount = count($words);
echo $totalWordsCount;