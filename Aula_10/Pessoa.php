<?php

abstract class Pessoa {
    private $nome;
    private $idade;
    private $sexo;
    
    public function __construct($nome, $idade, $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
    
    public function fazerAniv(){$this->setIdade($this->getIdade() + 1);}
    
    
    
    
    
    
    // Setters and Getters
    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getSexo() {
        return $this->sexo;
    }




}