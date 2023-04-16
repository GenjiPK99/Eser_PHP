<?php
//Creare un array di persone con nome, cognome e genere. Se il genere e’ M stampare “Buongiorno Sig.” e se e’ F stampare “Buongiorno Sig.ra” 

$persons = [
    ["name" => "Francesco" ,
    "lastName" => "Signorini" ,
    "gender"  =>    "Male"],

    ["name" => "Rosanna" ,
    "lastName" => "Gesuita" ,
    "gender"  =>    "Female"] ,

    ["name" => "Pasqualina" ,
    "lastName" => "Schiamazzi" ,
    "gender"  =>    "Female"],

    ["name" => "Mario" ,
    "lastName" => "NonRossi" ,
    "gender"  =>    "Male"] , 

    ["name" => "Rita" ,
    "lastName" => "Lercia" ,
    "gender"  =>    "Female"] , 

    ["name" => "Massimo" ,
    "lastName" => "Lercio" ,
    "gender"  =>    "Male"] , 
];

foreach ($persons as $person) {
  if ($person["gender"] != "Male") {
    echo("Buongiorno Signora : ".$person["name"].".\n") ;
  } else if ($person["gender"] != "Female"){
    echo("Buongiorno Signor : ".$person["name"].".\n") ;
  }
};
?>