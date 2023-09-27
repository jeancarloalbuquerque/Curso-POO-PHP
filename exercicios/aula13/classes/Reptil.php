<?php 

    require_once 'Animal.php';

    class Reptil extends Animal {
        protected $corEscama;
        

        function locomover(){
            echo "<p>Rastejando...</p>";
        }
        
        function alimentar(){
            echo "<p>Comendo frutas do solo...</p>";
        }
        
        function emitirSom(){
            echo "<p>Emitindo som de Réptil...</p>";
        }


        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }