<?php
require_once 'Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "Peixe Correndo";
    }
    
    public function alimentar(){
        echo "Peixe Comendo";
    }
    
    public function emitirSom(){
        echo "Peixe emitindo som";
    }
    
    public function soltarBola(){
        echo "Peixe soltando Bolha";
    }
    
    
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }

}
