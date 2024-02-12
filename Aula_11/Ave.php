<?php
require_once 'Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function locomover(){
        echo "Ave Correndo";
    }
    
    public function alimentar(){
        echo "Ave Comendo";
    }
    
    public function emitirSom(){
        echo "Ave emitindo som";
    }
    
    public function fazerNinho(){
        echo "Ave fazendo ninho";
    }
    
    public function getCorPena() {
        return $this->corEscama;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }

}
