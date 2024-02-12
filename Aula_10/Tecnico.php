<?php
require_once 'Aluno.php';
class Tecnico extends Aluno{
    private $registroProfissional;
    
    public function __construct($nome, $idade, $sexo, $matr, $curso, $reg) {
        parent::__construct($nome, $idade, $sexo, $matr, $curso);
        
        $this->setResgistro($reg);
    }
    
    public function praticar(){}
    
    public function setResgistro($reg){$this->registroProfissional = $reg;}
    public function getRestistro(){return $this->registroProfissional;}
    
}
