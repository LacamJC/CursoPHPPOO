<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';
            
            $p1 = new Visitante('Pedro', 22, 'M');
            $p2 = new Aluno('Guanabara', 16, 'M', true, 'Informática');
            $p3 = new Professor('Marcel', 43, 'M', 'PHP', 5000);
            $p4 = new Funcionario('Beatriz', 34, 'F', 'RH', true);
            $p5 = new Bolsista('Pablo', 34, 'M', true, 'Administração', true);
            $p6 = new Tecnico('Chris', 20, 'M', true, 'Contabilidade', true);
            
            $p5->pagarMensalidade();
        
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);
            print_r($p5);
            print_r($p6);
//                $p5->renovarBolsa();
        ?>
        </pre>
    </body>
</html>
