<?php

/*
  Wypisz liczby dodatnie z przedziału domkniętego od -10 do 20.
  (zastosuj pętle for i while)
 */

//(-10 , 20)


for ($i = -10; $i <= 20; $i++) {
    if ($i > 0) {
        echo "$i<br>";
    }
}

echo "<hr>";


$k = -10;
$j = 20;

while ($k <= $j) {
    if ($k > 0) {
        echo "$k<br>";
    }
    $k++;
}