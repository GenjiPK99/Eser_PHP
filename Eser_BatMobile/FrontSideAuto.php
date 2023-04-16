<?php

abstract class parteAnteriore{
    abstract function attack();
}

class Cannone extends parteAnteriore{
    public function attack(){
        echo "Sparo i proiettili grossi + grossiiiii \n";
    }
}

class Lanciafiamme extends parteAnteriore{
    public function  attack(){
        echo "Questa è benzina e io vi do fuoco \n";
    }
}

class Lanciamissili extends parteAnteriore {
    public function  attack(){
        echo "Sparo Missili Esplosivi \n";
    }
}
?>