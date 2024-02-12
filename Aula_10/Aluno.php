<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa{
    private $matr;
    private $curso;
   
    public function __construct($nome, $idade, $sexo, $matr, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->setMatr($matr);
        $this->setCurso($curso);
    }
    
    public function cancelarMatr(){
        echo "Matricula Cancelada";
        $this->setMatr(false);
    }
    
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr): void {
        $this->matr = $matr;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
