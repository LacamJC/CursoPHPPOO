<?php
require_once 'AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    public function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->setReproduzindo(false);
    }
    
    public function play(){
        $this->setReproduzindo(true);
        $this->setViews();
    }
    
    public function pause(){
        $this->setReproduzindo(false);
    }
    
    public function like(){
        $this->setCurtidas();
    }
    
    
    
    
    
    
    
    // Setters and Getters
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function getViews() {
        return $this->views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function getReproduzindo() {
        return $this->reproduzindo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvaliacao($avaliacao): void {
//        $this->avaliacao = $avaliacao;
        
        $media = ($this->avaliacao + $avaliacao) / $this->getViews();
        $this->avaliacao = $media;
    }

    public function setViews(): void {
        $this->views ++;
    }

    public function setCurtidas(): void {
        $this->curtidas = $this->curtidas + 1;
    }

    public function setReproduzindo($reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }


}
