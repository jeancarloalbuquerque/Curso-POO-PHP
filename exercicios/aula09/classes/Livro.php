<!-- Livro
- titulo
- autor
- totPaginas
- pagAtual
- aberto
- leitor
+ detalhes() -->

<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        // CONSTRUTOR

        public function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);

            $this->pagAtual = 0;
            $this->aberto = false;
        }

        // GETTERS

        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getTotPaginas(){
            return $this->totPaginas;
        }
        
        public function getPagAtual(){
            return $this->pagAtual;
        }

        public function getAberto(){
            return $this->aberto;
        }

        public function getLeitor(){
            return $this->leitor;
        }

        // SETTERS

        public function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        public function setAutor($autor){
            $this->autor = $autor;
        }

        public function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        public function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        public function setAberto($aberto){
            $this->aberto = $aberto;
        }

        public function setLeitor($leitor){
            $this->leitor = $leitor;
        }

        // METODOS

        public function detalhes() {
            echo
                "Livro <strong>". $this->getTitulo() .
                "</strong> escrito por <strong>" . $this->getAutor() .
                // "</strong> com " . $this->getTotPaginas() . " páginas.<br>".
                "</strong><br>Está sendo lido por <strong>". $this->leitor->getNome() ."</strong>".
                " (página " . $this->getPagAtual() . " de " . $this->getTotPaginas() . ")<hr>";
                ;
        }

        // INTERFACE

        public function abrir(){
            $this->setAberto(true);
        }
        
        public function fechar(){
            $this->setAberto(false);
        }
 
        public function folhear($pagAtual){
            if($pagAtual >=0 && $pagAtual <= $this->getTotPaginas()){
                $this->setPagAtual($pagAtual);
            }
        }
 
        public function avancarPag(){
            if($this->getPagAtual() < $this->getTotPaginas()){
                $this->setPagAtual($this->getPagAtual()+1);
            }
        }
 
        public function voltarPag(){
            if($this->getPagAtual() < $this->getTotPaginas()){
                $this->setPagAtual($this->getPagAtual()+1);
            }
        }


    }
    


?>