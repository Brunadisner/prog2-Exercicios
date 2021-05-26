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
    public function getSenha2(){
        return $this->senha2;
    }

    public function setSenha2($senha2){
        $this->senha = $senha2;
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

    public function validate(){
        $erros = array();
        if(empty($this->getNome()))
            $erros[] = "É necessário informar um nome";
        if(empty($this->getEmail()))
            $erros[] = "É necessário informar um endereço de e-mail";
        elseif(!filter_var($this->getEmail(),FILTER_VALIDATE_EMAIL))
            $erros[] = "Verifique o formato do endereço de e-mail";
        if(empty($this->getTelefone()))
            $erros[] = "É necessário informar um telefone válido";
        if(strlen($this->getSenha()) < 6)
            $erros[] = "É necessário informar um telefone válido";       
        if(empty($this->getSenha() != $this->getSenha2()))
            $erros[] = "As senhas não conferem";   
        return $erros;
    }
}







?>