<?php

/*
  Napisz skrypt, który zapełni tablicę losowymi 10 liczbami.
 */


$tablica = [];

for ($i = 0; $i < 10; $i++) {
    $j = rand(1, 100);
    $tablica [] = $j;
}

print_r($tablica);
