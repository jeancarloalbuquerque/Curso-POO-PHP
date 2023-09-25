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



        public function __construct(string $titulo, string $autor, int $totPaginas, Pessoa $leitor){
            $this->setTitulo($titulo);
            $this->setAutor($autor);
            $this->setTotPaginas($totPaginas);
            $this->setLeitor($leitor);
            $this->setPagAtual(0);
            $this->setAberto(false);
        }



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

        public function setAberto(bool $aberto){
                $this->aberto = $aberto;
        }

        public function setLeitor($leitor){
                $this->leitor = $leitor;
        }



        public function detalhes(){
            $tit = $this->getTitulo();
            $aut = $this->getAutor();
            $pag = $this->getPagAtual();
            $pagTot = $this->getTotPaginas();
            $lei = $this->getLeitor()->getNome();

            echo "Livro <strong>$tit</strong> de <strong>$aut</strong><br>";
            echo "Está sendo lido por <strong>$lei</strong> (página $pag de $pagTot)<hr>";
        }


        public function abrir(){
            $this->setAberto(true);
        }
        
        public function fechar(){
            $this->setAberto(false);
        }

        public function folhear($pagina){
            if($pagina >= 0 && $pagina <= $this->getTotPaginas()){
                $this->setPagAtual($pagina);
            }
        }

        public function avancarPag(){
            if($this->getPagAtual() < $this->getTotPaginas()){
                $this->setPagAtual($this->getPagAtual()+1);
            }
        }

        public function voltarPag(){
            if($this->getPagAtual() > 0){
                $this->setPagAtual($this->getPagAtual()-1);
            }
        }


    }

?>