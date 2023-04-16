<?php

include ('FrontSideAuto.php');
include ('BackSideAuto.php');

class BatMobile {
    public $parteAnteriore;
    public $partePosteriore;
    
    public function __construct(parteAnteriore $arma , partePosteriore $movimento){
        $this-> parteAnteriore = $arma;
        $this-> partePosteriore = $movimento;
    }
    
    public function attacca(){
        $this-> parteAnteriore ->attack();
    }
    
    public function muoviti(){
        $this-> partePosteriore ->move();
    }
}

$bm = new BatMobile( new Lanciafiamme(), new Ruota());
$bm1 = new BatMobile( new Cannone() , new Cingolo());

$bm->attacca();
$bm->muoviti();
$bm1->attacca();
$bm1->muoviti();

?>