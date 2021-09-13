<?php
include('animal.php');
class Robot{
    public $tipo;
    function __construct($tipo)
    {
        $this->tipo = $tipo;
    }
function emitirsonido($sonido){
    echo 'los robot tipo'.$this->tipo.'emiten sonido de'.$sonido;
}
function movimiento(){
    echo 'su movimiento es propio de los robots'.$this->$tipo;
}
}
$r2d2=new Robot('drone');
$r2d2->emitirsonido('aspas de vuelo');
$r2d2->movimiento();
?>