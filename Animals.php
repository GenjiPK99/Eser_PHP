<?php
// Creare una classe Animale generica 
// Creare N classi (Almeno 5) di animali reali che specializzano la classe animale, 
// utilizzando anche i metodi self per il conteggio


class Animal {  //classe generica con attributi + counter inizializzato a 0
    public $species;
    public $type;
    public $family;
    public static $counter = 0;

    public function __construct($species, $type, $family){
        $this-> species = $species;    //dopo this-> dichiararla SENZA $ e dopo mettere '='
        $this-> type = $type;
        $this-> family = $family;    //ricordare sempre che dopo '=' dichiararla con il simbolo $ avanti
        self::$counter++;
    }
    //counter
    public static function HowManyAnimanl(){
        echo "ci sono: " . self::$counter . " animali \n";
    }

}

//1 classe dog
class Dog extends Animal {
    public $subtype;
    public $country;

    public function __construct($species, $type, $family, $subtype, $country){
        parent::__construct($species, $type, $family);
        $this->subtype = $subtype;
        $this->country = $country;

    }

}
     //fuori l'oggetto dichiaro gli animali dog e var_dump
$fuffi = new Dog("Pitbull" ,'aggressivo', 'mammiferi', 'cane', 'italia');
var_dump($fuffi);



//2 classe cat
class Cat extends Animal {
    public $cibo;

    public function __construct($species, $type, $family, $cibo){
        parent::__construct($species, $type, $family);
        $this->cibo = $cibo;
    }

}
//fuori l'oggetto dichiaro gli animali cat e var_dump per visualizzarla al terminale
$willi = new Cat("persiano", 'dolce', 'mammifero','croccantini');
var_dump($willi);


// 3 classe scimmia 
class Monkey extends Animal {
    public $city;

    public function __construct($species, $type, $family, $city){
        parent::__construct($species, $type, $family);
        $this->city = $city;
    }
}

//fuori l'oggetto dichiaro l'animale scimmia e var_dump
$cichita = new Monkey("mammifero", 'scimmia', 'scinpanzè', 'sud-africa');
var_dump($cichita);


//4 classe delfini
class Shark extends Animal {
    public $sea;

    public function __construct($species, $type, $family, $sea){
        parent::__construct($species, $type, $family);
        $this->sea = $sea;
    }
}

//fuori l'oggetto dichiaro l'animale delfino e var_dump
$lello = new Shark("mammifero marino", 'pesce-cane', 'carnivori', 'oceano');
var_dump($lello);



// 5 classe uccelli
class Bird extends Animal {
    public $color;

    public function __construct($species, $type, $family, $color){
        parent::__construct($species, $type, $family);
        $this->color = $color;
    }
}

//fuori l'oggetto dichiaro l'animale uccello e var_dump
$pippo = new Bird("vertebrati", 'pappagallo', 'uccelli', 'multicolor');
var_dump($pippo);



//counter di animali
Animal::HowManyAnimanl();

//esercizio risultato

?>