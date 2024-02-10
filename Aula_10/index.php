<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once "Pessoa.php";
        
        $c1 = new Pessoa("joao", 19, "M");
        
        print_r($c1)
        ?>
    </body>
</html>
