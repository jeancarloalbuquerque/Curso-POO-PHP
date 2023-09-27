<?php

    require_once 'Pessoa.php';

    class Professor extends Pessoa {
        private $especialidade;
        private $salario; 



        public function __construct(string $nome, int $idade, string $sexo, string $especialidade, float $salario){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->sexo = $sexo;
            $this->especialidade = $especialidade;
            $this->salario = $salario;
        }


        
        public function getEspecialidade(){
            return $this->especialidade;
        }

        public function getSalario(){
            return $this->salario;
        }

        public function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }

        public function setSalario($salario){
            $this->salario = $salario;
        }



        public function receberAumento(float $aumento){
            $this->salario += $aumento;
        }

        
    }

?>