<?php

    require_once 'Pessoa.php';

    class Gafanhoto extends Pessoa {
        private $login;
        private $totAssistido;

        public function __construct($nome, $idade, $sexo, $login){
            parent::__construct($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }

        public function viuMaisUm($n){
            $this->totAssistido += 1*$n;
            $this->ganharExperiencia(10*$n);
        }
        


        public function getLogin(){
            return $this->login;
        }

        public function getTotAssistido(){
            return $this->totAssistido;
        }

        public function setLogin($login){
            $this->login = $login;
        }

        public function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }
    }

    class Anima {
        public function fazerBarulho() {
            echo "Animal faz algum barulho.";
        }
    }
    
    class Cachorro extends Anima {
        public function fazerBarulho() {
            echo "O cachorro faz latido.";
        }
    }