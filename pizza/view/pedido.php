<h2>Faça o seu pedido.</h2>
<hr>
<form action="carrinho.php" method="post" onsubmit="return addToCart()">
    <label for="tamanho">Selecione o tamanho da pizza:</label>
    <select name="tamanho" id="tamanho" onchange="selectPizzaSize()">
        <option value="">-------SELECIONE------</option>
        <option value="p">P-8 fatias</option>
        <option value="m">M-12 fatias</option>
        <option value="g">G-16 fatias</option>
        <option value="gg">GG-20 fatias</option>
    </select>
<br>

    <div id="opcoes_pedido">
    <p>Você selecionou <strong id="numSabores">0</strong> de <strong id="limiteSabores">0</strong> sabores</p>  
    <div id="lista">

    <?php
    //$conexao = mysqli_connect("localhost","admpizza","12345","pizza");
    //$sql = "select * from sabor";
    //$resultado = mysqli_query($conexao,$sql);
    //mysqli_close($conexao);
    //while($array = mysqli_fetch_array($resultado)){
    require_once "classes/Sabor.php";
    require_once "classes/SaborDAO.php";
    $obj = new SaborDAO;
    $lista = $obj->listar();
    foreach($lista as $sabor){

    ?>
    
    <div class="sabores sabor-selecionado">
    <label>
        <input type="checkbox" name="sabores[]" value="<?=$sabor->getCodigo()?>" onchange="updateCount()">
        <div class="img-pizza">
            <img src="assets/img/<?=$sabor->getNomeImagem()?>" alt=<?=$sabor->getNome()?>>
        </div>
        <div class="sabor-desc">
            <strong><?=$sabor->getNome()?></strong>
            <?=$sabor->getIngredientes()?>
        </div>
    </label>
    </div>
    <?php
    }
    ?>



<br>
<fieldset>
    <legend>Selecione a opção de borda:</legend>
        <label><input type="radio" name="borda" value=""checked>Sem borda</label><br>
        <label><input type="radio" name="borda" value="">Chocolate</label><br>
        <label><input type="radio" name="borda" value="">Catupiry</label><br>
        <label><input type="radio" name="borda" value="">Nutella</label><br>
        <label><input type="radio" name="borda" value="">Doce de leite</label><br>
</fieldset>
<br>
    <input type="submit" value="Adicionar ao carrinho" name="adicionar">
</div>
</form>

