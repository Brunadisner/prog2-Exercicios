<?php
    require_once "Conexao.php";
    require_once "Sabor.php";
    
    class SaborDAO{

        public $conexao;

        public function __construct(){
            $this->conexao = Conexao::conecta();
        }

        public function listar(){
            // select * from sabor order by nome
            try{
                $query = $this->conexao->prepare("select * from sabor order by nome");
                $query->execute();
                $registros = $query->fetchAll(PDO::FETCH_CLASS, "Sabor");
                return $registros;
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }


        }

        public function buscar($cod){
            try{
                $query = $this->conexao->prepare("select * from sabor where codigo = :cod");
                $query->bindParam(":cod", $cod, PDO::PARAM_INT);
                $query->execute();
                $registro = $query->fetch(PDO::FETCH_CLASS, "Sabor");
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