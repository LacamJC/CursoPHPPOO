<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero{
    
    public function emitirSom(){
        echo "Cachorro está emitindo som";
    }
    
    public function enterrarOsso(){
        echo "Cachorro enterrando seu osso";
    }
    public function abanarRabo(){
        echo "Cachorro abanando rabo";
    }
    
    public function reagir(){
        if($this->getIdade() == "novo" && $this->getPeso() == "leve")
        {
            echo "Abanar";
        }elseif($this->getIdade() == "velho" && $this->getPeso() == "leve")
        {
            echo "Rosnar";
        }elseif($this->getIdade() == "novo" && $this->getPeso() == "pesado"){
            echo "Latir";
        }elseIf($this->getIdade() == "velho" && $this->getPeso() == "pesado"){
            echo "Ignorar";
        }
    }
    


}
