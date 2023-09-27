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
            require_once 'classes/Tecnico.php';

            $p1 = new Tecnico("jean", 34, "m", 46543246579, "matematica", 0.3);
            print_r($p1);
            echo '<hr>';
            
            $p1->fazerAniversario();
            $p1->praticar();
            $p1->pagarMesalidade();
            print_r($p1);

            
        ?>
    </pre>
</body>
</html>