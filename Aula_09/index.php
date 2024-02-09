<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leitor Livros e Publicações</title>
  </head>
  <body>
      <pre>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
        require_once "Pessoa.php";
        require_once "Livro.php";
        
        $pessoa = new Pessoa("Marcel", 52,"Masculino");
        $livro = new Livro("Learning POO With PHP 8", "Novotec", 300, true, $pessoa);
//                print_r($livro);
//                print_r($pessoa)
        
//        $livro->avancarPag();
        
//        $livro->avancarPag();
        
//        $livro->avancarPag();
        
//        $livro->voltarPag();
        
//        $livro->folhear(20);
        
//        $livro->abrir();
        

        
        
        $livro->detalhes();
        ?>
      </pre>
  </body>
</html>