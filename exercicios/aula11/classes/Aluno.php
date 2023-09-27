<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa {
        protected $matricula;
        protected $curso;

        

        public function __construct(string $nome, int $idade, string $sexo, int $matricula, string $curso){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->sexo = $sexo;
            $this->matricula = $matricula;
            $this->curso = $curso;
        }



        public function getMatricula(){
            return $this->matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }



        public function pagarMesalidade(){
            echo "<p>Pagando Mensalidade do Aluno ".$this->getNome()."</p>";
        }
    }

?>