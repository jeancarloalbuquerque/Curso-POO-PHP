<?php 

    require_once 'Animal.php';

    class Mamifero extends Animal {
        protected $corPelo;
        

        function locomover(){
            echo "<p>Andando...</p>";
        }
        
        function alimentar(){
            echo "<p>Mamando...</p>";
        }
        
        function emitirSom(){
            echo "<p>Emitindo som de mamifero...</p>";
        }


        public function getCorPelo(){
            return $this->corPelo;
        }

        public function setCorPelo($corPelo){
            $this->corPelo = $corPelo;
        }
    }