<?php

    require_once 'Aluno.php';

    class Bolsista extends Aluno {
        private $bolsa;
        private $validadeBolsa;



        public function __construct(string $nome, int $idade, string $sexo, int $matricula, string $curso,  float $bolsa){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->sexo = $sexo;
            $this->matricula = $matricula;
            $this->curso = $curso;
            $this->validadeBolsa = 6;
            $this->bolsa = $bolsa;
        }

        

        public function getBolsa(){
            return $this->bolsa;
        }

        public function getValidadeBolsa(){
            return $this->validadeBolsa;
        }

        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }

        public function setValidadeBolsa($validadeBolsa){
            $this->validadeBolsa = $validadeBolsa;
        }



        public function renovarBolsa(){
            $this->validadeBolsa+=6;
        }

        public function pagarMesalidade(){
            echo "<p>Pagando Mensalidade do Aluno Bolsista ".$this->getNome()."</p>";
        }

    }

?>