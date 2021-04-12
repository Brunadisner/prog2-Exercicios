function closeChat(){
    document.getElementById("chat").style.display = 'none';
}
function minChat(){
    chat = document.getElementById("chat");
    chat.style.height = '30px';
    texto = document.getElementById("texto");
    texto.innerHTML = 'Chat';
}
function maxChat(){
    chat = document.getElementById("chat");
    chat.style.height = '150px';
    texto = document.getElementById("texto");
    texto.innerHTML = 'Clique aqui para falar com os atendentes';
}
function showMenu(){
    menu = document.getElementsByTagName("nav")[0];
    if(menu.style.display == 'block')
        menu.style.display = 'none';
    else
        menu.style.display = 'block';
}

document.body.onresize = function(){
    largura = window.innerWidth;
    menu = document.getElementsByTagName("nav")[0];
    if(largura >= 700){
         menu.style.display = 'block';
    }  
    else{
        menu.style.display = 'none';
    } 
};
var sizes = {
    'p': 2,
    'm': 3,
    'g': 4,
    'gg': 4,
}

function selectPizzaSize(){
    currentSize = document.getElementById("tamanho").value;
    if(currentSize == ""){
        document.getElementById("opcoes_pedido").style.display = "none";
    }
    else{
        document.getElementById("opcoes_pedido").style.display = "block";
    }
    document.getElementById("limiteSabores").innerText = sizes[currentSize];

    lista=document.querySelectorAll("input[type=checkbox]");
    for (i = 0; i < lista.length; i++)
        lista[i].checked = false;
    document.getElementById("numSabores").innerText = 0;
}

function countSabores(){
    total = 0;
    lista=document.querySelectorAll("input[type=checkbox]");
    for (i = 0; i < lista.length; i++)
        if(lista[i].checked)
            total++;
    return total;
}

function updateCount(){
    currentSize = document.getElementById("tamanho").value;
    countSelected = countSabores();
    document.getElementById("numSabores").innerText = countSelected;
    if(countSelected > sizes[currentSize])
        alert("Você ultrapassou o número de sabores permitido");
}

function addToCart(){
    currentSize = document.getElementById("tamanho").value;
    countSelected = countSabores();
    if(countSelected > sizes[currentSize]){
        alert("Você ultrapassou o número de sabores permitido");
        return false;
    }
    else{
        if(countSelected == 0){
            alert("Selecione pelo menos 1 sabor")
            return false;
        }
    }
}

/*validação de fórmulario*/
function validateForm(){
    var nome = document.getElementById("id_nome").value;
    var email = document.getElementById("id_email").value;
    var end = document.getElementById("id_endereco").value;
    var telefone = document.getElementById("id_telefone").value;
    var bairro = document.getElementById("id_bairro").value;
    var senha = document.getElementById("id_senha").value;
    var confirma_senha = document.getElementById("id_senha2");
    if (nome == null || nome == "" || nome.indexOf(" ") == -1){
        alert("O nome completo deve ser preenchido");
        return false;
    }
    if (email == null || email == "" || email.indexOf("@") == -1){
        alert("O email deve ser preenchido");
        return false;
    }
    if (end == null || end == "" || end.indexOf(" ") == -1){
        alert("O endereço deve ser preenchido");
        return false;
    }
    if (telefone == null || telefone == "" || telefone.indexOf(" ") == -1){
        alert("O telefone deve ser preenchido");
        return false;
    }
    if (bairro == null || bairro == ""){
        alert("O bairro deve ser preenchido");
        return false;
    }
    if (senha == null || senha == ""){
        alert("A senha deve ser preenchida");
        return false;
    }
  
    if(senha.value != confirma_senha.value){
        confirma_senha.setCustomValidity("Senhas diferentes!");
    }
    else{
        confirma_senha.setCustomValidity('');
    }
    
}

   