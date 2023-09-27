<?php 

    require_once 'Animal.php';

    class Peixe extends Animal {
        protected $corEscama;
        

        function locomover(){
            echo "<p>Nadando...</p>";
        }
        
        function alimentar(){
            echo "<p>Comendo plânctons...</p>";
        }
        
        function emitirSom(){
            echo "<p>Som de bolhas...</p>";
        }

        function soltarBolhas(){
            echo "<p>Soltando bolhas...</p>";
        }

        public function getCorEscama(){
            return $this->corEscama;
        }

        public function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
    }