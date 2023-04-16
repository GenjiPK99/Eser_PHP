<?php

include ('Mobo.php');


class configuration_PC{
    public $configuration;

    public function __construct(configuration $computare){
        $this-> configuration = $computare;
    }

    public function computare(){
        $this-> configuration ->compute();
    }
}

$pc = new configuration_PC( new mobo );
$pc1 = new configuration_PC( new cpu );
$pc2 = new configuration_PC( new gpu );
$pc3 = new configuration_PC( new ram );
$pc4 = new configuration_PC( new nvme );
$pc5 = new configuration_PC( new psu );
$pc6 = new configuration_PC( new dissipatore );

$pc->computare();
$pc1->computare();
$pc2->computare();
$pc3->computare();
$pc4->computare();
$pc5->computare();
$pc6->computare();

?>