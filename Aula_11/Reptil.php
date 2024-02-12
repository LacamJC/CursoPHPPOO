<?php
require_once 'Animal.php';
class Reptil extends Animal{
    private $corEscama;
    
    public function locomover(){
        echo "Reptil Correndo";
    }
    
    public function alimentar(){
        echo "Reptil Comendo";
    }
    
    public function emitirSom(){
        echo "Reptil emitindo som";
    }
    
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
