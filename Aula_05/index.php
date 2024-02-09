<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Olá</title>
    </head>
    <body>
        <pre>
        <?php
        require_once "Conta.php";
        $c1 = new Conta('João', 0,false,9897); // $d,$s,$st,$t,$n
        $c2 = new Conta('Fernando',0,false,1245);
        
        $c1 ->abrirConta('cc');
        $c2 ->abrirConta('cp');
        
//        $c1 ->pagarMensalidade();
//        $c2 ->pagarMensalidade();
        
        $c1 ->depositar(300);
        $c2 ->depositar(500);
        
//        $c2 ->sacar(100);
        
        $c1 ->sacar(349);
        $c2 ->sacar(649);
        
        $c1 ->fecharConta();
        $c2 ->fecharConta();
        
        print_r($c1);
        print_r($c2);
        
        ?>
    </pre>
    </body>
</html>
