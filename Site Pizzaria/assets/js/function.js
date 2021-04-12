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
