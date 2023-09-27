<?php

require_once 'Mamifero.php';

class Cachorro extends Mamifero{
    function locomover(){ //método de sobreposição
        echo "<p>Correndo...</p>";
    }

    function emitirSom(){
        echo "<p>Au! Au! Au!</p>";
    }

    

}