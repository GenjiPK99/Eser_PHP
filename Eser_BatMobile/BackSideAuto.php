<?php

abstract class partePosteriore{
    abstract function move();
}
class Ruota extends partePosteriore {
    public function  move(){
        echo "Vado velocissimo con le ruote \n";
    }
}

class Cingolo extends partePosteriore {
    public function  move(){
        echo "Posso muovermi ovunque con i cingoli \n";
    }
}
?>