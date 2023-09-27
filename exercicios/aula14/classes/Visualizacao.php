<?php

    require_once 'Gafanhoto.php';
    require_once 'Video.php';

    class Visualizacao {
        private Gafanhoto $espectador;
        private Video $filme;

        public function __construct(Gafanhoto $espectador, Video $filme){
            $this->espectador = $espectador;
            $this->filme = $filme;
            $this->espectador->viuMaisUm(1);
            $this->filme->setViews($this->filme->getViews()+1);
        }

        public function avaliar(){
            $this->filme->setAvaliacao(6);
        }

        public function avaliarNota($nota){
            $this->filme->setAvaliacao($nota);
        }

        public function avaliarPorc($porc){
            $this->filme->setAvaliacao($porc/10);
        }



        public function getEspectador(){
            return $this->espectador;
        }

        public function getFilme(){
            return $this->filme;
        }

        public function setEspectador($espectador){
            $this->espectador = $espectador;
        }

        public function setFilme($filme){
            $this->filme = $filme;
        }
    }