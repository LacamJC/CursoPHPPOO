<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Lutador.php';
        require_once 'Luta.php';
        
        $c1 = new Lutador('Pretty Boy', 'França',     31,   1.75,  68.9,  11, 2, 1);
        $c2 = new Lutador('Putscript',  'Brasil',     29,   1.68,  57.8,  14, 2, 3);
        $c3 = new Lutador('Snapshadow', 'EUA',        35,   1.65,  80.9,  12, 2, 1);
        $c4 = new Lutador('Deadcode',   'Australia',  28,   1.93,  81.6,  13, 0, 2);
        $c5 = new Lutador('Ufocobol',   'Brasil',     37,   1.70,  119.3, 05, 4, 3);
        $c6 = new Lutador('Nerdaard',   'EUA',        30,   1.81,  105.7, 12, 2, 4);
        
        $lutadores = [$c1, $c2, $c3, $c4, $c5, $c6];
        
        $UEC01 = new Luta($lutadores[4], $lutadores[5]);
        $UEC01->lutar();
//        print_r($UEC01);

        ?>
        </pre>

    </body>
</html>
