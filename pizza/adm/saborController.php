<?php

include_once "../classes/SaborDAO.php";
if(!isset($_GET['acao'])){
    $titulo = "lista de Sabores";
    $obj = new SaborDAO();
    $lista = $obj->listar();
    include "view/layout/rodape.php";
    include "view/layout/topo.php";
    include "view/layout/rodape.php";

}
else{
    switch($_GET['acao']){

        case 'cadastra':
            $titulo = "Cadastro de sabor";

            if(!isset($_POST['cadastrar'])){
                include "view/layout/rodape.php";
                include "view/layout/topo.php";
                include "view/layout/rodape.php";
            }
            break;
        
        case 'altera':
            echo $titulo = "Alteração de sabor";

            break;
        
        case 'exclui':
            echo $titulo = "Exclusão de sabor";
    
            break;

    }
}