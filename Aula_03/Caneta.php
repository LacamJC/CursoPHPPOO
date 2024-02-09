<?php

    class Caneta
    {
        public $modelo;  # Atributo
        public $cor;     # Atributo
        
        private $ponta;   # Atributo
        
        protected $carga;   # Atributo
        protected $tampada; # Atributo
        
        // Método
        
        public function setModelo($m) 
        {
            $this -> modelo = $m;    
        }
        
        public function rabiscar()
        {
            if($this -> tampada == true){
                echo "<p>Estou tampada não posso rabiscar</p>";
            }
            
            else {
                echo "<p>Estou rabiscando</p>";
                
            }
        }
        
        // Método
        public function tampar(){
            
            $this -> tampada = true;
            
        }
        
        // Método
        public function destampar(){
        
            $this -> tampada = false;
            
        }
        
        
        
    }


