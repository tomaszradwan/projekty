<?php

/*
  Napisz skrypt, który utworzy plik z 10 największymi zabytkami Krakowa,
  a następnie wypisz je w formie listy wypunktowanej
 */


$newFile = fopen("zabytkiKrakowa.txt", 'w') or die("NIE");


    $text = "
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
";

fwrite($newFile, $text) or die("NIE____");
fclose($newFile);
echo "Plik zapisany";



        
        
