<?php
require_once 'Pessoa.php';
class Funcionario extends Pessoa {
    private $setor;
    private $trabalhando;
    
    public function __construct($nome, $idade, $sexo, $setor, $trabalhando)
    {
        parent::__construct($nome,$idade,$sexo);
        $this->setSetor($setor);
        $this->setTrabalhando($trabalhando);
        
    }
    
    public function mudarTrabalho(){}
    
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }


}
