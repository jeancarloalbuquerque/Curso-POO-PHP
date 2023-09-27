<?php 

    require_once 'Animal.php';

    class Ave extends Animal {
        protected $corPena;
        

        function locomover(){
            echo "<p>Voando...</p>";
        }
        
        function alimentar(){
            echo "<p>Comendo frutas das árvores...</p>";
        }
        
        function emitirSom(){
            echo "<p>Cantando...</p>";
        }

        function fazerNinho(){
            echo "<p>Fazendo um ninho...</p>";
        }

        public function getCorPena(){
            return $this->corPena;
        }

        public function setCorPena($corPena){
            $this->corPena = $corPena;
        }
    }