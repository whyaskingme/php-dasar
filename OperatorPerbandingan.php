<?php

var_dump("10" == 10);
var_dump("10" === 10);
var_dump("Apa" != 10);

var_dump(10 < 9);
var_dump(9 >= 9);

$total = 0;

$fruit = 1000;
$meat = 10000;
$milk = 5000;

$total += $fruit;
$total += $meat;
$total += $milk;


var_dump($total);