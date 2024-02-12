<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    
    public function __construct($nome, $idade, $sexo, $matr, $curso, $bolsa)
    {
        parent::__construct($nome, $idade, $sexo, $matr, $curso);
        $this->setBolsa($bolsa);
    }
    
    public function renovarBolsa(){
        echo "Bolsa renovada";
    }
            
    public function pagarMensalidade(){
        echo "Bolsa de " . $this->getNome() . " Paga com desconto de Bolsista";
    }
    
    public function setBolsa($bolsa){$this->bolsa = $bolsa;}
    public function getBolsa(){return $this->bolsa;}
}
