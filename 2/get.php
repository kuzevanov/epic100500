<?php

$input = 'default';

if (isset($_GET['name'])) {
    $input = $_GET['name'];
}

echo $input;