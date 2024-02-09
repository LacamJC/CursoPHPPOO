<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head lang="pt-BR">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Controle Remoto</h1>
    <pre>
        <?php
            require_once "ControleRemoto.php";
            
            $c1 = new ControleRemoto();
            
            $c1 -> ligar();
            $c1 -> maisVolume();
            $c1 -> maisVolume();
            $c1 -> abrirMenu();
        ?>
    </pre>
        
    </body>
</html>
