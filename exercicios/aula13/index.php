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
            require_once 'classes/Mamifero.php';
            require_once 'classes/Reptil.php';
            require_once 'classes/Peixe.php';
            require_once 'classes/Ave.php';
            require_once 'classes/Cachorro.php';

            $m = new Mamifero(35, 4, 4);
            // $m->setCorPelo("marrom");
            // $m->setCorEscama("marrom");
            $m->setCorPelo("marrom");

            print_r($m); 
        
            $m->locomover();
            // $m->soltarBolhas();
            $m->emitirSom();
        ?>
    </pre>
</body>
</html>