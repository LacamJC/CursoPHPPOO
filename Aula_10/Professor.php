<?php
require_once 'Pessoa.php';
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function __construct($nome, $idade, $sexo, $especialidade, $salario){
        parent::__construct($nome, $idade, $sexo);
        $this->setEspecialidade($especialidade);
        $this->setSalario($salario);
    }
    
    public function receberAum($aum){
        $this->setSalario($this->getSalario() + $aum);
    }
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }


}
