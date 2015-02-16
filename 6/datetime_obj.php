<?php

$rawDate = "17.02 2015";
$date = \DateTime::createFromFormat('d.m Y', $rawDate);
var_dump($date);

$now = new \DateTime();

if ($date > $now) {
    echo $date->format('Y-m-d H:i:s') . ' is in future';
}