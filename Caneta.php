<?php

    class Caneta
    {
        var $modelo;// Atributo
        var $cor; // Atributo
        var $ponta;// Atributo
        var $carga;// Atributo
        var $tampada;// Atributo
        
        // Método
        function rabiscar()
        {
            if($this -> tampada == true){
                echo "<p>Estou tampada não posso rabiscar</p>";
            }
            
            else {
                echo "<p>Estou rabiscando</p>";
                
            }
        }
        
        // Método
        function tampar(){
            
            $this -> tampada = true;
            
        }
        
        // Método
        function destampar(){
        
            $this -> tampada = false;
            
        }
        
        
        
    }


