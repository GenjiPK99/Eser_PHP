<?php
abstract class heands {
    abstract function attack();
   }

   class missiliMiniaturizzati extends heands {
    public function attack(){
      echo "MiniMissili: Esplodiamo all'impatto; \n";
    }
  }

  class laser extends Heands {
    public function attack(){
      echo "Laser: Laseriamo il mondo!; \n";
    }
  }

?>