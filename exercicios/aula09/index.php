<!-- 
    
Pessoa
- nome 
- idade
- sexo
+ fazerAniversario()

Livro
- titulo
- autor
- totPaginas
- pagAtual
- aberto
- leitor
+ detalhes()

<<INTERFACE>>
Publicacao
+ abrir()
+ fechar()
+ folhear()
+ avancarPag()
+ voltarPag

-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'classes/Pessoa.php';
        require_once 'classes/Livro.php';

        $p = array();
        $p[0] = new Pessoa("Jean", 24, "M");
        $p[1] = new Pessoa("Pedro", 22, "M");
        $p[2] = new Pessoa("Maria", 31, "F");

        $l = array();
        $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
        $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[1]);
        $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[2]);

        $l[0]->abrir();
        $l[0]->folhear(65);

        $l[0]->detalhes();
    
        // var_dump($p);
        // var_dump($l);
    ?>
</body>
</html>