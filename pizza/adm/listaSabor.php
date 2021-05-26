<main>
    <h2><?=$titulo ?></h2>
    <hr>
    <br><br>
    <p> <a href="saborController.php?aca=cadastra">inserir novo</a> </p>
    <table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ingredientes</th>
        <th>Ações</th>

    </tr>
    <?php
    if(count($lista) == 0){
        echo "<p>Nenhum sabor encontrado</p>";
    }
    else{
        foreach($lista as $sabor){

        
    
    ?>
    <tr>
        <td><?=  $sabor->getCodigo() ?></td>
        <td><?=  $sabor->getNome() ?></td>
        <td><?=  $sabor->getIngredientes() ?></td>
        <td>
        <a href="saborController.php?acao=altera&cod=<?=$sabor->getCodigo() ?>">alterar</a> 
                | 
                <a href="saborController.php?acao=exclui&cod=<?=$sabor->getCodigo() ?>" 
                onclick="return confirm('Tem certeza de que deseja excluir este sabor?')">excluir
        </td>
    </tr>
    <?php
    }

}
?>
    </table>


</main>