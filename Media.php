<?php
//Scrivere un programma che calcoli la media di un array di numeri interi, considerando solo i numeri divisibili per 2 

$numbers = [1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9];
$somma = 0;
foreach($numbers as $number){
if ($number % 2 == 0) {
    $somma = $somma + $number;
}
}
$media = $somma/ 8;
var_dump($media);
?>