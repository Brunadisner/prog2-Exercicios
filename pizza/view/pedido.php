
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
<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/lombo.jpg" alt="lombo">
    </div>
    <div class="sabor-desc">
        <strong>Lombo com Catupiry:</strong>
        Molho, lombo, catupiry e mussarela
    </div>
</label>
</div>


<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/frango.jpg" alt="lombo">
    </div>
    <div class="sabor-desc">
        <strong>Frango com Catupiry:</strong>
        Molho, Frango, catupiry e mussarela
    </div>
</label>
</div>


<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/lombo.jpg" alt="lombo">
    </div>
    <div class="sabor-desc">
        <strong>Calabresa:</strong>
        Molho, calabresa e mussarela
    </div>
</label>
</div>


<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/queijo.jpg" alt="lombo">
    </div>
    <div class="sabor-desc">
        <strong>Quatro-queijos</strong>
        Molho, mussarela, oregano.
    </div>
</label>
</div>

<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/salame.png" alt="lombo">
    </div>
    <div class="sabor-desc">
        <strong>Salame:</strong>
        Molho, Salame e mussarela
    </div>
</label>
</div>



<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/milho.jpg" alt="lombo">
    </div>
    <div class="sabor-desc">
        <strong>Milho com bacon:</strong>
        Molho, milho, bacon e mussarela
    </div>
</label>
</div>



<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/chocolate.jpg" alt="Chocolate">
    </div>
    <div class="sabor-desc">
        <strong>Chocolate preto:</strong>
        Leite condensado e chocolate preto
    </div>
</label>
</div>



<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/moarngo.png" alt="Chocolate com morango">
    </div>
    <div class="sabor-desc">
        <strong>Chocolate com morango:</strong>
        Leite condensado, chocolate preto e morango
    </div>
</label>
</div>



<div class="sabores sabor-selecionado">
<label>
    <input type="checkbox" name="sabores[]" value="" onchange="updateCount()">
    <div class="img-pizza">
        <img src="assets/img/2amores.jpg" alt="2 amores">
    </div>
    <div class="sabor-desc">
        <strong>Dois amores:</strong>
        Leite condensado, chocolate preto e branco
    </div>
</label>
</div>
</div>
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

