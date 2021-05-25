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

        public function inserir(){



        }

        public function alterar(){



        }

        public function excluir(){





        }
        

    }



?>