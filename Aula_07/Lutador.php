<?php
class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
       $this -> setNome($nome);
       $this -> setNacionalidade($nacionalidade);
       $this -> setIdade($idade);
       $this -> setAltura($altura);
       $this -> setPeso($peso);
       $this -> setVitorias($vitorias);
       $this -> setDerrotas($derrotas);
       $this -> setEmpates($empates);
    }
    
    public function apresentar(){
        echo '--- Apresentando '. $this->getNome() . '---';
        echo '<br>=== Nacionalidade--'. $this->getNacionalidade();
        echo '<br>=== Idade----------'. $this->getIdade()        ;
        echo '<br>=== Altura---------'. $this->getAltura() . 'M' ;
        echo '<br>=== Peso-----------'. $this->getPeso()   . 'Kg';
        echo '<br>=== Categoria------'. $this->getCategoria()    ;
        echo '<br>=== Vitorias-------'. $this->getVitorias()     ;
        echo '<br>=== Derrotas-------'. $this->getDerrotas()     ;
        echo '<br>=== Empates--------'. $this->getEmpates()      ;
    }
    public function status(){}
    public function ganharLuta(){return $this->setVitorias($this->getVitorias()+1);}
    public function perderLuta(){return $this->setDerrotas($this->getDerrotas()+1);}
    public function empatarLuta(){return $this->setEmpates($this->getEmpates()+1);}
    
    
    public function setNome($nome){ $this->nome = $nome;}
    public function getNome(){return $this -> nome;}
    
    public function setNacionalidade($nacionalidade){$this -> nacionalidade = $nacionalidade;}
    public function getNacionalidade(){return $this -> nacionalidade;}
    
    public function setIdade($idade){$this -> idade = $idade;}
    public function getIdade(){return $this -> idade;}
    
    public function setAltura($altura){$this -> altura = $altura;}
    public function getAltura(){return $this -> altura;}
    
    public function setPeso($peso){$this -> peso = $peso;$this -> setCategoria($this->getPeso());}
    public function getPeso(){return $this -> peso;}
     
    private function setCategoria($peso){
        if($peso <= 52.2){
            $this-> categoria = 'Indválido';
        }else 
            if($peso <= 70.3){
                $this -> categoria = 'Leve';
            }else 
                if($peso <= 83.9){
                    $this -> categoria = 'Médio';
                }else
                    if($peso <= 120.2){
                        $this -> categoria = 'Pesado';
                    } else {
                        $this -> categoria = 'Inválido';
                    }
                    
                    
        
    }
    public function getCategoria(){return $this -> categoria;}
    
    public function setVitorias($vitorias){$this -> vitorias = $vitorias;}
    public function getVitorias(){return $this -> vitorias;}
    
    public function setDerrotas($derrotas){$this -> derrotas = $derrotas;}
    public function getDerrotas(){return $this -> derrotas;}
    
    public function setEmpates($empates){$this -> empates = $empates;}
    public function getEmpates(){return $this -> empates;}
    
}
