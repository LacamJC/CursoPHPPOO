<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 04 Metodos especiais</title>
        <link rel="stylesheet" href="css/css.style"/>
    </head>
    <body>
        <pre>
        <?php
            require_once "Caneta.php";

            $c1 = new Caneta("Bic Cristal", "Azul marinho", 0.5);
            $c2 = new Caneta("Raiovac", "Verde mole", 1.0);
            print_r($c1);
            print_r($c2);
        ?>
        </pre>
        
    </body>
</html>
