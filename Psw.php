<?php
// Scrivi un programma che data una password inserita dall'utente , capisca tramite l'utilizzo di funzioni se è composta da:
// 1) Un minimo di 8 caratteri alfanumerici/speciali 
// 2) Almeno 1 o più caratteri maiuscolo
// 3) Almeno 1 o più numeri
// 4) Almeno 1 o più caratteri speciali (./,!-_?..etc.);

$password = readline("Inserisci Password:\n");

// Controllo numero Caratteri
function checkLen($password){
    if(strlen($password) < 8){
        echo ("La Password NON contiene almeno 8 caratteri alfanumerici/speciali" . "\n");
        return false;
    }
    echo ("La Password contiene almeno 8 caratteri alfanumerici/speciali" . "\n");  
    return true;
    
};

// Controllo Caratteri in Maiuscolo

function checkUpper($password){
    $pswSplit = str_split($password);
    foreach ($pswSplit as $charUpper) {
        if (ctype_upper($charUpper)){
            echo "La Password contiene almeno 1 o più caratteri in maiuscolo". "\n";
            return true;
        } 
    }
    echo "La Password NON contiene almeno 1 o più caratteri in maiuscolo". "\n";
    return false;
};

// //Controllo Numeri

function checkNumber($password){
    $pswSplit = str_split($password);
    foreach ($pswSplit as $charNumber){
        if (is_numeric($charNumber)){
            echo "La Password contiene almeno 1 o più numeri". "\n";
            return true;
        }
    }
    echo "La Password NON contiene almeno 1 o più numeri". "\n";
    return false;
};

// Controllo Caratteri Speciali 

function checkPunct($password){
    $pswSplit = str_split($password);
    foreach ($pswSplit as $charSpecial){ 
        if (ctype_punct($charSpecial)){
            echo "La Password contiene almeno 1 o piu' caratteri speciali"."\n";
            return true;
        }
    }
    echo "La Password NON contiene almeno 1 o piu' caratteri speciali"."\n";
    return false;
};


    while ((!checkLen($password) || !checkUpper($password) || !checkNumber($password) || !checkPunct($password))) {
        echo "Password non Sicura \n";
        $password = readline("Reinserire Password:\n");
    } 
    echo "Password Valida e Sicura \n";

?>