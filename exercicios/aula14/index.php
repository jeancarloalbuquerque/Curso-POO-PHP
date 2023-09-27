<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            // require_once 'classes/Video.php';
            // require_once 'classes/Gafanhoto.php';
            require_once 'classes/Visualizacao.php';

            $v = new Video("Curso POO conceito #14a - Exercícios de POO (Parte 2)", "Ótima", 71533, 4350);
            $p = new Gafanhoto("Jean Carlo", 24, "M", "jean.carlo");
            $view = new Visualizacao($p, $v);
            $view2 = new Visualizacao($p, $v);

            $view->avaliar();
            $view->avaliar();
            $view->avaliar();
            $view->avaliar();
            $view->avaliar();
            $view->avaliar();
            $view->avaliarPorc(87);

            print_r($view);


            $p->viuMaisUm(3);
            $v->like();
            
        
        ?>
    </pre>
</body>
</html>