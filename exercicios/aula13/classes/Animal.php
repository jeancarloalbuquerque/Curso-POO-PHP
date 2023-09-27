<?php

    abstract class Animal {
        protected $peso;
        protected $idade;
        protected $numMembros;



        public function __construct(float $peso, int $idade, int $numMembros){
            $this->setPeso($peso);
            $this->setIdade($idade);
            $this->setNumMembros($numMembros);
        }



        abstract function locomover();
        
        abstract function alimentar();
        
        abstract function emitirSom();
        


        public function getPeso(){
            return $this->peso;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getNumMembros(){
            return $this->numMembros;
        }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function setNumMembros($numMembros){
            $this->numMembros = $numMembros;
        }
    }