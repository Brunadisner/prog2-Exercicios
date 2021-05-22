
<h2>Cadastro</h2>
<!--Action:é a pagina php que vai as informações de login-->
<!--Metodo get mostra os dados na url, os dados enviados pelo formulario, o método POST deixa-->
<!--size: tamanho do campo, maxlenght: número max de caracteres, value: preenche com um valor padrão, placeholder: preenche com uma dica-->
<form method="POST" action="" autocomplete="off" onsubmit="return validateForm()">
    <div>
        <label for="id_nome">Nome completo: </label> 
        <input type="text" name="field_nome" size="50" maxlength="50" 
        placeholder="Informe o seu nome completo" id="id_nome">
    </div>
    <br>
    <div>
        <label for="id_email">E-mail: </label> 
        <input type="email" name="field_email" size="50" maxlength="50" 
        placeholder="Digite seu e-mail" id="id_email">   
    </div>
    <br>
    <div>
        <label for="id_endereco">Endereço: </label> 
        <input type="text" name="field_endereco" size="50" maxlength="50" 
        placeholder="Rua, número, complemento" id="id_endereco">   
    </div>
    <br>
    <div>
        <label for="id_bairro">Bairro</label>
        <select id="id_bairro"name="field_bairro">
            <option>Selecione</option>
            <option>Centro</option>
            <option>Efapi</option>
            <option>Engenho Braum</option>
            <option>Jardim Itália</option>
            <option>Saic</option>
            <option>Vederti</option>
        </select>
    </div>
    <br>
    <div>
        <label for="id_telefone">Telefone: </label> 
        <input type="tel" name="field_telefone" size="50" maxlength="50" id="id_telefone">   
    </div>
    <br>
    <div>
        <label for="id_senha" >Senha: </label> 
        <input type="password" name="field_senha" size="50" maxlength="50" id="id_senha">   
    </div>
    <br>
    <div>
        <label for="id_senha2">Confirme a senha: </label> 
        <input type="password" name="field_senha2" size="50" maxlength="50" 
        placeholder="" id="id_senha2">   
    </div>
    <br>
    <div>
        <fieldset>
            <legend>Como conheceu nossa empresa?</legend>
            <label><input type="radio" name="field_comoConheceu" value="1">Loja física</label>
            <br>
            <label><input type="radio" name="field_comoConheceu" value="2">Redes sociais</label>
            <br>
            <label><input type="radio" name="field_comoConheceu"value="3">Publicidade</label>
            <br>
            <label><input type="radio" name="field_comoConheceu"value="4">Indicação de amigos</label>
    </fieldset>
</div>
<br>
<div>
    <label><input type="checkbox" name="field_promo1" value="sim"checked>
        Quero receber promoção da Pizzaria Disner's
    </label>
</div>
<br>
<div>
    <input type="submit" value="Cadastrar">
    <input type="submit" value="Limpar campos">
</div>

</form>
