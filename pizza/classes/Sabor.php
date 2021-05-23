<?php

    class Sabor{
        //atributos
        private $codigo;
        private $nome;
        private $ingredientes;
        private $nomeImagem;

        //métodos

        public function getCodigo(){
            return $this->codigo;
        }

        public function setCodigo($cod){
            $this->codigo = $cod;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getIngredientes(){
            return $this->ingredientes;
        }

        public function setIngredientes($ingredientes){
            $this->ingredientes = $ingredientes;
        }

        public function getNomeImagem(){
            return $this->nomeImagem;
        }

        public function setNomeImagem($nomeImagem){
            $this->nomeImagem = $nomeImagem;
        }


    }



?>