<?php
    require_once 'Controlador.php';
    class ControleRemoto implements Controlador
    {
      private $volume;
      private $ligado;
      private $tocando;
      
      
      public function __construct(){
          $this -> volume = 5;
          $this -> ligado = false;
          $this -> tocando = false;
      }
      //
      
      public function ligar(){
          if($this -> getLigado() == false )
          {
              $this -> setLigado(true);
          }
      }
      public function desligar(){
          if($this -> getLigado() == true)
          {
              $this -> setLigado(false);
          }
      }
      
      public function play(){
          if($this -> getLigado() == true and $this -> getTocando() == false )
          {
              $this->setTocando(true);
          }
      }
      
      public function pause(){
          if($this -> getLigado() == true and $this -> getTocando() == true)
          {
              $this -> setTocando(false);
          }
      }
      
      public function abrirMenu(){
          echo "----- Menu -----";
          if($this->getLigado() == true)
          {
              echo "<br>Está ligado: SIM";
          }else {
              echo "<br>Está ligado: NÃO";
          }
          
          if($this->getTocando() == true)
          {
              echo "<br>Está tocando: SIM";
          }else {
              echo "<br>Está tocando: NÃO";
          }
          
          $volume = ""; 
          
          for($i=0; $i < $this->getVolume(); $i++)
          {
              $volume .= "I";
          }
          
          echo "<br>Volume : " . $volume;
      
      }
      public function fecharMenu(){echo "Fechando Menu";}
      
      public function maisVolume()
      {
        if($this->getLigado()==true)
        {
            $this->setVolume($this->getVolume() + 1);
        }
      }
        
      public function menosVolume()
      {
          if($this->getLigado()==true)
          {
              $this->setVolume($this->getVolume() - 5);
          }
      }
      public function ligarMudo(){
          if($this->getLigado() == true and $this->getVolume() > 0)
          {
              $this->setVolume(0);
          }
      }
      public function desligarMudo(){
          if($this->getLigado() == true and $this->getVolume() == 0)
          {
              $this->setVolume(50);
          }
      }
      
      // Métodos especiais
      private function getVolume(){
          
//          $volume = ""; 
//          
//          for($i=0; $i < $this->volume; $i++)
//          {
//              $volume .= "I";
//          }
          
          return $this -> volume;
          
      }
      private function setVolume($volumeAdicional){
          $this->volume = $volumeAdicional;
      }
      
      private function getLigado(){return $this->ligado;}
      private function setLigado($ligado){$this->ligado = $ligado;}
          
      private function getTocando(){return $this->tocando;}
      private function setTocando($tocando){$this->tocando=$tocando; }
    }
    