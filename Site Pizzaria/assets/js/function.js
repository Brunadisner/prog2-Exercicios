function closeChat(){
    document.getElementById("chat").style.display = 'none';
}
function minChat(){
    chat = document.getElementById("chat");
    chat.style.height = '30px';
    texto = document.getElementById("texto");
    texto.innerHTML = 'Chat';
}