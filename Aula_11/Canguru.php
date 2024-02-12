<?php
require_once 'Mamifero.php';
class Canguru extends Mamifero{
    
    public function emitirSom(){
        echo "<br>Canguru está emitindo som</br>";
    }
    
    public function usarBolsa(){
        echo "Canguru usando bolsa";
    }
    
    public function locomover(){
        echo "Canguru Pulando";
    }
}
