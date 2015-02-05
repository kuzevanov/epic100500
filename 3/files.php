<?php

$text = file_get_contents('hipster.txt');

$parts = explode("\n\n", $text);

var_dump($parts);

krsort($parts);

var_dump($parts);

$result = implode("\n\n", $parts);

file_put_contents('result.txt', $result);