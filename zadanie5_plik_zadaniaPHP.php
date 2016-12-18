<?php

/*
  wyświetl 6 losowych liczb z przedziłu od 1 do 49
 */


$n = 6;

for ($i = 0; $i < $n; $i++) {
    echo rand(1, 49) . "<br>";
}
