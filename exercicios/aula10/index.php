<?php
    include_once 'classes/Pessoa.php';
    include_once 'classes/Aluno.php';
    include_once 'classes/Funcionario.php';
    include_once 'classes/Professor.php';
    
    echo "<pre>";

    $p = array();
    $p[0] = new Pessoa();
    $p[1] = new Aluno();
    $p[2] = new Professor();
    $p[3] = new Funcionario();
    
    $p[0]->setNome("Pedro");
    $p[1]->setNome("Maria");
    $p[2]->setNome("Cláudio");
    $p[3]->setNome("Fabiana");
    
    $p[1]->setCurso("Informática");
    $p[2]->setSalario(2500.75);
    $p[3]->setSetor("Estoque");
    
    $p[2]->receberAumento(550.20);
    $p[3]->mudarTrabalho();
    $p[1]->cancelarMat();
    
    




    print_r($p);







    echo "</pre>";
