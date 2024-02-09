<?php
class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function __construct($l1, $l2){
        $this->setDesafiado($l1);
        $this->setDesafiante($l2);
        $this->marcarLuta($l1,$l2);
        
    }
   
    
    public function marcarLuta($l1, $l2){
        if($l1->getCategoria() == $l2->getCategoria() and $l1 <> $l2)
        {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        }else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
            
        }
        
    }
    
    public function lutar(){
        if($this->getAprovada() == true)
        {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
                
            $vencedor = rand(0,2);
            
            switch ($vencedor)
            {
                case 0:
                    echo "<br><p>EMPATE</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<br><p>Desafiado Venceu</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<br><p>Desafiante Venceu</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
            }
            
        }else {
            echo "Luta não aprovada pela commisão UFC";
        }
    }
    
    
    public function setDesafiado($desafiado){$this->desafiado = $desafiado;}
    public function getDesafiado(){return $this -> desafiado;}
    
    public function setDesafiante($desafiante){$this->desafiante = $desafiante;}
    public function getDesafiante(){return $this->desafiante;}
    
    public function setRounds(){}
    public function getRounds(){}
    
    public function setAprovada($aprovada){$this->aprovada = $aprovada;}
    public function getAprovada(){return $this->aprovada;}
    
    
}
