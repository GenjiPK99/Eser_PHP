<?php

abstract class armor {
 abstract function protection();
}

class core extends armor {
  public function protection(){
    echo "Cit. Anche Tony Stark ha un cuore, ed è incastonato al centro dell'armatura protettiva Iron Man; \n";
  }
}

?>