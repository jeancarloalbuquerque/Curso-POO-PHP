<?php

    abstract class Pessoa {
        private $nome;
        private $idade;
        protected $sexo;

        

        public function getNome(){
            return $this->nome;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }



        public function __construct(string $nome, int $idade, string $sexo){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->sexo = $sexo;
        }



        public function fazerAniversario(){
            // $this->setIdade($this->getIdade()+1);
            $this->idade ++;
        }
    }