<?php

$i = 0;
$j = 1;
$sum = 0;

for ($i; $i<10000;) {
    echo $i . "\n";
    echo $j . "\n";
    $i = $i + $j;
    $j = $i + $j;
}