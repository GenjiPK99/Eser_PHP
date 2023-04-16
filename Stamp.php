<?php

// - Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”; se multiplo di 5 deve stampare  “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY68".


// for ($i=0; $i <=100 ; $i++) { 
//     if (($i % 15) == 0) {
//         echo "HACKADEMY68"."\n";
//     } elseif(($i % 3) == 0){
//         echo "PHP"."\n";
//     } elseif(($i % 5) == 0){
//         echo "JS"."\n";
//     } else {
//         echo $i ."\n"; 
//     }
// };

// Funziona con entrambi

for ($i=0; $i <=100 ; $i++) {
    switch ($i) {
    case (($i % 15) == 0):
    echo "HACKADEMY68"."\n";
    break;
    case (($i % 3) == 0):
    echo "PHP"."\n";
    break;
    case (($i % 5) == 0):
    echo "JS"."\n";
    break;
    default:
    echo $i ."\n";         
    break;
};
}
?>