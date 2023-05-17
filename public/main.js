//Quando se clica no botão Livros no Footer abre o dropdown em cima
function aguarde(){
    setTimeout(abrirLivro, 1000);
}
function abrirLivro(){
    $("#botao_livros").dropdown("toggle");
}

//Fazer scroll logo para a caixa branca
function scrollCaixa(){
    let scroll = document.getElementById("caixa_branca");
    scroll.scrollIntoView();
}

//Mudar botao da Nav Mobile
let botao = true
function botaoNav(){
    var img = document.getElementById("botao_menu_mobile");

    if(botao){
        img.setAttribute("src", url_base+"public/imagensdesktop/fechar.svg")
        botao = false
    }
    else{
        img.setAttribute("src", url_base+"public/imagensdesktop/menu.svg")
        botao = true
    }
}

//Ocultar Ver Mais e aparecer texto
function abrirTextoAutor(){
    document.getElementById("texto_abreviado").classList.toggle("d-none");
    document.getElementById("texto_completo").classList.toggle("d-none");
    document.getElementById("texto_completo").classList.toggle("d-block");

}
