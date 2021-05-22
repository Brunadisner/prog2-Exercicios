
<h2>Área do cliente.</h2>
<!--Action:é a pagina php que vai as informações de login-->
<!--Metodo get mostra os dados na url, os dados enviados pelo formulario, o método POST deixa-->
<!--size: tamanho do campo, maxlenght: número max de caracteres, value: preenche com um valor padrão, placeholder: preenche com uma dica-->
<form method="POST" action="">
<fieldset>
    <legend>Acesse sua conta</legend>
<div>
    <label for="id_email">E-mail: </label> 
    <input type="email" name="field_email" size="50" maxlength="50" placeholder="Informe o e-mail utilizado no cadastro">
</div>
<br>    
<div>
    <label>
        Senha: <input type="password" name="field_senha">
    </label>
</div>
<br>
<div>
    <input type="submit" value="Acessar minha conta">
    <input type="submit" value="Limpar campos">
</div>
<div id="cadastro">
    <p><a href="index.php?acao=cadastro">Faça o seu cadastro</a></p>
</div>
</fieldset>
</form>
