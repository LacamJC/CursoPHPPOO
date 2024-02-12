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
        
        require_once 'Cachorro.php';
        require_once 'Canguru.php';
        require_once 'Tartaruga.php';
        require_once 'Arara.php';
        require_once 'Cobra.php';
        require_once 'Goldfish.php';
        
        
        $cachorro = new Cachorro();
        $canguru = new Canguru();
        $tartaruga = new Tartaruga();
        $arara = new Arara();
        $cobra = new Cobra();
        $goldfish = new Goldfish();
        
        $animais = [$cachorro, $canguru, $tartaruga, $arara, $cobra, $goldfish];
        $cachorro->setPeso(20);
//        for($i = 0; $i < count($animais); $i ++)
//        {
//            echo "<br>";
//            echo print_r($animais[$i]);
//            echo "</br>";
//        }
        
//        $cachorro->emitirSom();
//        $canguru->emitirSom();
//        $tartaruga->emitirSom();
//        $arara->emitirSom();
//        $cobra->emitirSom();
//        $goldfish->emitirSom(); 
  
        
        $cachorro->setPeso("leve");
        $cachorro->setIdade("velho");
        
        $cachorro->reagir();
        ?>
        </pre>
    </body>
</html>
