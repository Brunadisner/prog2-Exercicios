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

document.body.onresize = function resize(){
    window.innerWidth;
    if(largura >= 700){
         menu.style.display = 'block';
    }  
    else{
        menu.style.display = 'none';
    } 
};

function selectPizzaSize(){
    currentSize = document.getElementById("tamanho").Value;
    if(currentSize == ""){
        document.getElementById("opcoes_pedido").style.display = "none";
    }
    else{
        document.getElementById("opcoes_pedido").style.display = "block";
    }

}
