<!-- Pessoa
- nome 
- idade
- sexo
+ fazerAniversario() -->

<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $sexo;
        
        // CONSTRUTOR

        public function __construct(string $nome, int $idade, string $sexo){
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
        }
        
        // GETTERS

        public function getNome(){
            return $this->nome;
        }
        
        public function getIdade(){
            return $this->idade;
        }
        
        public function getSexo(){
            return $this->sexo;
        }

        // SETTERS
        
        public function setNome(string $nome){
            $this->nome = $nome;
        }

        public function setIdade(int $idade){
            $this->idade = $idade;
        }
        
        public function setSexo(string $sexo){
            $this->sexo = $sexo;
        } 

        // METODOS

        public function fazerAniver(){
            $this->setIdade($this->getIdade()+1);
        }
    }
?>