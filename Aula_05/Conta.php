<?php
class Conta {
    //put your code here
    public    $numConta;
    private   $dono    ;
    protected $tipo    ; // cc = conta corrente ; cp = conta poupança
    private   $saldo   ;
    private   $status  ;
    
    public function __construct($d,$s,$st,$n) {
        $this-> status = false;
        $this-> saldo = 0;
        
        $this->setDono($d);
        $this->setSaldo($s);
        $this->setStatus($st);
//        $this->setTipo($t);
        $this->setnumConta($n);
        
    }
    
    public function abrirConta($tipoConta){
//        $this -> status = true;
        $this->setStatus(true);
//        $this -> tipo = $tipoConta;
        $this->setTipo($tipoConta);
                
        if($this->getTipo() == "cc")
        {
//            $this -> saldo = 50;
            $this -> setSaldo(50);
        }
        
        if($this->getTipo() == "cp")
        {
//            $this -> saldo = 150;
            $this ->setSaldo(150);
        }
        
    }
    public function fecharConta(){
        if($this->getSaldo() > 2)
        {
          echo "Ainda há dinheiro na conta";
            return "ERR";
        }
        
        if($this -> getSaldo() < 0)
        {
            echo "Está conta está em debito";
            return "ERR";
        }
        
        $this ->setStatus(false);
        
    }
    
    public function depositar($d){
        if($this->getStatus() == false)
        {
            echo "Esta conta está inativa";
        }
        if ($this->getStatus() == true)
        {
//            $this->saldo = ($this->saldo) + $d;
            $this->setSaldo($this->getSaldo() + $d);
            
//            echo "Saldo Atualizado";
        }

        
    }
    
    public function sacar($s){
   
        if($this->getSaldo() >= $s)
        {
                 echo "<p> Fazendo saque </p>";
//            $this-> saldo = ($this->saldo) - $s;
            $this->setSaldo(($this->getSaldo()-$s));
        }
        
        if($this->getStatus() == false){echo "Conta inativa";}
    }
    
    public function pagarMensalidade(){
        if($this->getTipo() == "cc" and $this->getStatus() == true and $this->getSaldo() > 12)
        {
//           $this->saldo -= 12;
           $this -> setSaldo(($this->getSaldo()-12));
        }
        
        if($this->getTipo() == "cp" and $this-> getStatus() == true and $this -> getSaldo() > 20)
        {
//           $this->saldo -= 20;
           $this-> setSaldo($this->getSaldo() - 20);
        }
        
        return "ERR: Erro ao pagar mensalidade";
    }
    
    public function getnumConta(){return $this-> numConta;}
    public function setnumConta($n){$this-> numConta = $n;}
    
    public function getDono(){return $this -> dono;}
    public function setDono($d){$this -> dono = $d;}
    
    public function getSaldo(){return $this -> saldo;}
    public function setSaldo($s){$this -> saldo = $s;}
    
    public function getStatus(){return $this -> status;}
    public function setStatus($st){$this->status = $st;}
    
    public function getTipo(){return $this -> tipo;}
    public function setTipo($t){$this->tipo = $t;}
    
    
    
    
    
    
    
    
    
    
    
}