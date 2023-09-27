<?php

    // COMERN
    C - CONFIAVEL
    O - OPORTUNO
    M - MANUTENIVEL
    E - EXTENSIVEL
    R - REUTILIZAVEL
    N - NATURAL 

    class ContaBanco {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public function __construct(){
            $this->setStatus(FALSE);
            $this->setSaldo(0);
        }

        private function setNumConta($numConta){
            $this->numConta = $numConta;
        }

        public function getNumConta(){
            return($this->numConta);
        }

        private function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getTipo(){
            return($this->tipo);
        }

        private function setDono($dono){
            $this->dono = $dono;
        }

        public function getDono(){
            return($this->dono);
        }

        private function setSaldo($saldo){
            $this->saldo = $saldo;
        }

        public function getSaldo(){
            return($this->saldo);
        }

        private function setStatus($status){
            $this->status = $status;
        }

        public function getStatus(){
            return($this->status);
        }

           
        public function abrirConta(string $tipo){
            $this->setTipo($tipo);
            $this->setStatus(TRUE);

            if($this->getTipo() == "cc"){
                $this->setSaldo(50);
            }
            elseif($this->getTipo() == "cp"){
                $this->setSaldo(150);
            }
            else{
                echo "Tipo de conta não existente";
            }

        }

        public function fecharConta(){
            if($this->getStatus() === TRUE){
                if($this->getSaldo() > 0){
                    echo "Impossível fechar a conta!<br>";
                    echo "Conta com saldo.";
                }
                elseif($this->getSaldo() < 0){
                    echo "Impossível fechar a conta!<br>";
                    echo "Conta em débito.";
                }
            }
            else{
                echo "Impossível fechar a conta!<br>";
                echo "Conta está inativa.";
            }
        }

        public function depositar($valor){
            if($valor > 0){
                $this->setSaldo($this->getSaldo() + $valor);
            }
            else {
                echo "Impossível depositar valor negativo!";
            }
        }

        public function sacar($valor){
            if($valor > 0){
                if($this->getSaldo()+0.001 > $valor){
                    $this->setSaldo($this->getSaldo() - $valor);
                }
                else {
                    echo "Impossível sacar! Valor do saque maior que o saldo.";
                }
            }
            else {
                echo "Impossível sacar valor negativo!";
            }
        }

        public function pagarMensal(){
            // cc 12
            // cp 20

        }
        
    }

    $c1 = new ContaBanco();
    $c1->abrirConta("cp");
    // $c1->depositar(1);
    // $c1->sacar(151);
    

    echo '<pre></pre>';
    var_dump($c1);
    echo '<pre></pre>';

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
</body>
</html>