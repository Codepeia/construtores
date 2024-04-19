<?php
    class Conta{
        private $numero;

        //metodos assessores get
        public function getNumero(){
            return $this->numero;
        }
        //metodo modificador set
        public function setNumero($numero){
            $this->numero = $numero;
        }
    }
?>