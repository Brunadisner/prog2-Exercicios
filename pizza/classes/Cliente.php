<?php

class cliente{

    private $codigo;
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $bairro;
    private $senha;
    private $senha2;
    private $comoConheceu;
    private $promoPizza;
    
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

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getEndereco(){
        return $this->endereco;
    }       

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairroo($bairro){
        $this->bairro = $bairro;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getConheceu(){
        return $this->comoConheceu;
    }

    public function setConheceu($comoConheceu){
        $this->senha2 = $comoConheceu;
    }

    
    public function getPromo(){
        return $this->promoPizza;
    }

    public function setPromo($promoPizza){
        $this->senha2 = $promoPizza;
    }
}







?>