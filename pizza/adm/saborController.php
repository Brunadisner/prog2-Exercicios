<?php

include_once "../classes/SaborDAO.php";
if(!isset($_GET['acao'])){
    $titulo = "lista de Sabores";
    $obj = new SaborDAO();
    $lista = $obj->listar();
    include "view/layout/topo.php";
    include "view/listaSabor.php";
    include "view/layout/rodape.php";

}
else{
    switch($_GET['acao']){

        case 'cadastra':
            $titulo = "Cadastro de sabor";

            if(!isset($_POST['cadastrar'])){
                include "view/layout/topo.php";
                include "view/cadastraSabor.php";
                include "view/layout/rodape.php";
            }
            else{
                $novo = new Sabor();
                $novo->setNome($_POST['field_nome']);
                $novo->setIngredientes($_POST['field_ingredientes']);
                $novo->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros)!=0){
                    include "view/layout/topo.php";
                    include "view/cadastraSabor.php";
                    include "view/layout/rodape.php";
                }
                else{
                    $destino = "../assets/img/".$_FILES['field_imagem']['name'];
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){

                        $bd = new SaborDAO();
                        if($bd->inserir($novo))
                            header("location: saborController.php");
                    }
                    else{
                        $erros[]="Erro no upload";
                        include "view/layout/topo.php";
                        include "view/cadastraSabor.php";
                        include "view/layout/rodape.php";
                    }
                }
            }
            break;
        
        case 'altera':
            $titulo = "Alterar sabor";

            if(!isset($_POST['alterar'])){
                $obj = new SaborDAO();
                $sabor = $obj->buscar($_GET['cod']);
                include "view/layout/topo.php";
                include "view/alteraSabor.php";
                include "view/layout/rodape.php";
            }
            else{
                $obj = new Sabor();
                $obj->setNome($_POST['field_nome']);
                $obj->setIngredientes($_POST['field_ingredientes']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $obj->validate();
                if(count($erros)!=0){
                    include "view/layout/topo.php";
                    include "view/alteraSabor.php";
                    include "view/layout/rodape.php";
                }
                else{
                    $destino = "../assets/img/".$_FILES['field_imagem']['name'];
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){

                        $bd = new SaborDAO();
                        if($bd->alterar($obj))
                            header("location: saborController.php");
                    }
                    else{
                        $erros[]="Erro no upload";
                        include "view/layout/topo.php";
                        include "view/alteraSabor.php";
                        include "view/layout/rodape.php";
                    }
                }
            }

            break;
        
        case 'exclui':
            echo $titulo = "Exclusão de sabor";
            if($bd->exluir($_GET['cod']))
                header("Location: saborController.php");
    
            break;

        default:
            echo "Ação não permitida";

    }
}
?>