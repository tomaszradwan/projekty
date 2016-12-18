<?php

/*
  Wykonaj kod, który spowoduje wyświetlenie odpowiedniego ciągu w zależności od
  aktualnej godziny na serwerze:

  - Dzień dobry gdy godzina między północą a 11:59
  - Miłego popołudnia gdy godzina między południem a 16:59
  - Dobry wieczór od 17:00 po południu
 */

$time = date('H:i');
echo "Czas aktualny: $time<br>";

function welcome() {
    $czas = date('H:i');

    $midnight = '00:00';
    $noon = '11:59';
    $afternoon = "16:59";

    if ($czas >= $midnight && $czas <= $noon) {
        return "Dzień dobry<br>";
    } else if ($czas >= $noon && $czas <= $afternoon) {
        return "Miłego popołudnia<br>";
    } else if ($czas >= $afternoon || $czas < $midnight) {
        return "Dobry wieczór<br>";
    }
}

echo welcome();
