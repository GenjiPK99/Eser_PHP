<?php
include ("Armor.php");
include ("Heands.php");
include ("Feets.php");

class IronMan {
    public $armor;
    public $heands;
    public $feets;

    public function __construct( armor $armatura, heands $manopola , feets $soprascarpa ){
        $this-> armor = $armatura;
        $this-> heands = $manopola;
        $this-> feets = $soprascarpa;
    }

    public function IRON(){
        $this-> armor ->protection();
        $this-> heands ->attack();
        $this-> feets ->fly();
    }

  
}

$ironMan1= new IronMan(new Core , new missiliMiniaturizzati, new stivaliRazzo);
$ironMan2= new IronMan(new Core , new laser, new stivaliRazzo);

$ironMan1->IRON();
$ironMan2->IRON();
?>