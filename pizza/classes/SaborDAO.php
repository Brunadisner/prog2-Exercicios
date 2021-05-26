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

        public function inserir(Sabor $sabor){
            try{
                $query = $this->conexao->prepare("insert into sabor values (NULL, :n, :i, :f)");
                $query->bindParam(":n", $sabor->getNome());
                $query->bindParam(":i", $sabor->getIngredientes());
                $query->bindParam(":f", $sabor->getNomeImagem());
                return $query->execute();
                
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }
           


        }

        public function alterar(Sabor $sabor){
            try{
                $query = $this->conexao->prepare("update sabor set nome = :n, ingredientes = :i, 
                nomeImagem = :f where codigo = :cod");
                $query->bindParam(":n", $sabor->getNome());
                $query->bindParam(":i", $sabor->getIngredientes());
                $query->bindParam(":f", $sabor->getNomeImagem());
                $query->bindParam(":cod", $sabor->getCodigo());
                return $query->execute();
                
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }


        }

        public function excluir($cod){
            
            try{
                $query = $this->conexao->prepare("delete from sabor where codigo = :cod");
                $query->bindParam(":cod",$cod);
                return $query->execute();
                
            }
            catch(PDOException $e){
                echo "Erro no acesso aos dados:".$e->getMessage();
            }




        }
        

    }



?>