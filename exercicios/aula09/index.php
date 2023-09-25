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

<?php
    require_once './classes/Pessoa.php';
    require_once './classes/Livro.php';

    $p = array();
    $p[0] = new Pessoa("Jean", 24, "M");
    $p[1] = new Pessoa("Rafael", 27, "M");

    $l = array();
    $l[0] = new Livro("PHP Básico", "José da Silva", 345, $p[0]);
    $l[1] = new Livro("Ortografia", "Aurelio", 584, $p[1]);
    $l[2] = new Livro("Sapiens", "Yaval Harari", 464, $p[0]);

    $l[2]->folhear(64);

    $l[0]->detalhes();
    $l[1]->detalhes();
    $l[2]->detalhes();

    var_dump($p);
    echo '<hr>';

    var_dump($l);
    echo '<hr>';


?>