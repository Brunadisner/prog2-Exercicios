<?php
    require_once "Conexao.php";
    require_once "Cliente.php";
    
    class ClienteDAO{

        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            // select * from cliente order by nome
            try{
                $query = $this->conexao->prepare("select * from cliente order by nome");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Cliente");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }


        }

        public function buscar($cod){
            try{
                $query = $this->conexao->prepare("select * from Cliente where codigo = :cod");
                $query->bindParam(":cod", $cod, PDO::PARAM_INT);
                $query->execute();
                $registro = $query->fetch(PDO::FETCH_CLASS, "Cliente");
                return $registro;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }

        }

        public function inserir(Cliente $cliente){
            try{
                $query = $this->conexao->prepare("insert into cliente values (NULL, :n, :e, :t,
                :end, :b, :s, :s2, :cc, :pp)");
                $query->bindParam(":n", $cliente->getNome());
                $query->bindParam(":e", $cliente->getEmail());
                $query->bindParam(":t", $cliente->getTelefone());
                $query->bindParam(":end", $cliente->getEndereco());
                $query->bindParam(":b", $cliente->getBairro());
                $query->bindParam(":s", $cliente->getSenha());
                $query->bindParam(":s2", $cliente->getSenha2());
                $query->bindParam(":cc", $cliente->getConheceu());
                $query->bindParam(":pp", $cliente->getPromo());




                return $query->execute();
                
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }
           


        }

        public function alterar(){



        }

        public function excluir(){





        }
        

    }



?>