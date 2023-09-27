<?php

    require_once 'Pessoa.php';

    class Aluno extends Pessoa{
        private $matricula;
        private $curso;



        // public function __construct($matricula, $curso){
        //     $this->matricula = $matricula;
        //     $this->curso = $curso;
        // }

        

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



        public function cancelarMat(){
            echo "<p>Matricula será cancelada</p>";
        }
    }