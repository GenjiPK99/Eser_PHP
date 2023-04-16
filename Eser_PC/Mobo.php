<?php

abstract class configuration {
    abstract function compute();
}

class mobo extends configuration{
    public function compute(){
        echo "La mia Configurazione da GaMiNg \n";
        echo "-MotherBoard:  ASUS ROG Crosshair VIII X570; \n";
    }
};

class cpu extends configuration{
    public function compute(){
        echo "-CPU: AMD Ryzen 9 5800X; \n";
    }
};

class gpu extends configuration{
    public function compute(){
        echo "-GPU: Nvidia RTX 3090 24GB; \n";
    }
}

class ram extends configuration{
    public function compute(){
        echo "-RAM: G. Skill Trident Z RGB 32GB 4000MHz; \n";
    }
};

class nvme extends configuration{
    public function compute(){
        echo "-SSD Nvme: Samsung 970 EVO SSD Pcle NVMe M.; \n";
    }
};

class psu extends configuration{
    public function compute(){
        echo "-PSU: Seasonic Prime GX-1000  \n";
    }
};

class dissipatore extends configuration{
    public function compute(){
        echo "-Dissipatore: NZXT Kraken X63 RGB 280mm; \n";
    }
};

?>