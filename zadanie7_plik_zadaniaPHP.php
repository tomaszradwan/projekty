<?php

/*
  Napisz skrypt, który utworzy plik z 10 największymi zabytkami Krakowa,
  a następnie wypisz je w formie listy wypunktowanej
 */


$newFile = fopen("zabytkiKrakowa.txt", 'w') or die("Nie utworzono pliku");


$text = <<<_END
1. Wawel
2. Kościół Mariacki
3. Sukiennice
4. Rynek Główny
5. Bazylia św. Trójcy
6. Zabytkowe kamienice
7. Barbakan
8. Kazimierz (dzielnica krakowska)
9.Kościół Karmelitów
10. Teatr i. J. Słowackiego
        
        autor:TR
_END;

fwrite($newFile, $text) or die("Nie zapisano pliku");
fclose($newFile);
echo "Plik zabytkiKrakowa.txt zapisany";





