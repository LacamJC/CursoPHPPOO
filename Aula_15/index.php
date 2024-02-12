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
        require_once 'Gafanhoto.php';
        require_once 'Video.php';
        require_once 'Visualizacao.php';
        
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Como usar Laravel?");
        $v[2] = new Video("Aprendendo HTML e CSS"); 
        
//        $v[1]->like();
//        print_r($v);
        
        
        $p[0] = new Gafanhoto('Guanabara', 54, 'M', 'Guana');
        $p[1] = new Gafanhoto('Alex', 24, 'F', 'Lexis');
        $p[2] = new Gafanhoto('Fernando', 32, 'M', 'Nando');
//        print_r($p);
        
        
        $a = new Visualizacao($p[0],$v[1]);
        $b = new Visualizacao($p[2], $v[1]);
        $b->avaliar();
        $a->avaliarPorc(44);
//        $b = new Visualizacao($p[0], $v[2]);
        print_r($a)
        ?>
        </pre>
    </body>
</html>
