<?php 
include ('animal.php');
class Ave extends Animal implements locomocion {
    public $pico;
    public $pata;
    function __construct($nombre,$clase,$pico,$pata){
        parent::__construct($nombre,$clase);
        $this->pico = $pico;
        $this->pata = $pata;
    }
    function movimiento(){
        echo $this->nombre.'se mueve por su pata'.$this->$pata;
    function
     emitirsonido($sonido){}
}
}

class Pez extends Animal implements locomocion {
    public $familia;
    public $habitad;
    function __construct($nombre,$clase,$familia,$habitad){
        parent::__construct($nombre,$clase);
        $this->familia = $familia;
        $this->habitad = $habitad;
    }
    function movimiento(){
        echo 'Movimiento caracteristicos de los peces de la familia'.$this->$familia;
    }
    function emitirsonido($sonido){}
}

$tiburon=new Pez("Tiburon","pez","cartilaginoso","oceano");
$paloma=new Ave("paloma","ave","delgado","anisodactila");
$tiburon->movimiento();
$paloma->movimiento();
$paloma->emitirsonido('gorjeo');
?>