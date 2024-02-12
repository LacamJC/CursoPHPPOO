<?php
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $espectador;
    private $filme;
    
    
    public function __construct($espectador, $filme)
    {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
       
        $this->getFilme()->setViews();
        $this->getFilme()->setReproduzindo(true);
        $this->getEspectador()->setTotAssistido(1);
    }
    
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        
    if ($porc <= 20) {
        $nova = 3;
    } elseif ($porc <= 50) {
        $nova = 5;
    } elseif ($porc <= 90) {
        $nova = 8;
    } elseif ($porc <= 100) {
        $nova = 10;
    } 

        
        $this->filme->setAvaliacao($nova);
    }
    
    public function getEspectador() {
        return $this->espectador;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setEspectador($espectador): void {
        $this->espectador = $espectador;
    }

    public function setFilme($filme): void {
        $this->filme = $filme;
    }


}
