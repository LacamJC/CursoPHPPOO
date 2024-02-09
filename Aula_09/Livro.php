<?php
require_once "Publicacao.php";
class Livro implements Publicacao{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    public function __construct($titulo, $autor, $totPaginas, $aberto, $leitor)
    {
        $this -> setTitulo($titulo);
        $this -> setAutor($autor);
        $this -> setPagAtual(0);
        $this -> setTotPaginas($totPaginas);
        $this -> setAberto($aberto);
        $this -> setLeitor($leitor);
    }
    
    public function detalhes(){
        echo "<br>O nome deste livro é <strong>". $this->getTitulo()."</strong>";
        echo "<br>Com um total de <strong>". $this->getTotPaginas() . "</strong> páginas";
        echo "<br>Está aberto ? <strong>". ($this->getAberto() == true ? "Sim" : "Não")."</strong>" ;
        echo "<br><strong>".$this->getLeitor()."</strong> está na pagina <strong>". $this->getPagAtual();
        echo "<br></strong>O autor deste livro é <strong>". $this->getAutor();
    }
    public function abrir(){
        $this->setAberto(true);
    }
    public function fechar(){
        $this->setAberto(false);
    }
    public function folhear($p){
        if($p < $this->getTotPaginas())
        {
            $this->setPagAtual($this->getPagAtual() + $p);
        }
    }
    public function avancarPag(){
        $this->setPagAtual($this->getPagAtual() + 1);
    }
    public function voltarPag(){
        $this->setPagAtual($this->getPagAtual() - 1);
    }
    
    
    
        
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    
    public function setAutor($autor){
        $this->autor = $autor;
    }
    
    public function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }
    
    public function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }
    
    public function setAberto($aberto){
        $this->aberto = $aberto;
    }
    
    
    public function setLeitor($leitor){
        $this->leitor = $leitor->getNome();
    }
    
    public function getTitulo(){return $this->titulo;}
    public function getAutor(){return $this->autor;}
    public function getTotPaginas(){return $this->totPaginas;}
    public function getPagAtual(){return $this->pagAtual;}
    public function getAberto(){return $this->aberto;}
    public function getLeitor(){return $this->leitor;}
}

