<?php
require_once 'Animal.php';
class Mamifero extends Animal{
    private $corPelo;
    
    public function locomover(){
        echo "Correndo";
    }
    
    public function alimentar(){
        echo "Mamifero Comendo";
    }
    
    public function emitirSom(){
        echo "Mamifero emitindo som";
    }
    
    public function getCorPelo() {
        return $this->corPelo;
    }

    public function setCorPelo($corPelo): void {
        $this->corPelo = $corPelo;
    }


}
