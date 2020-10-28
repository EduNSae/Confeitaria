var botaoPostar = document.querySelector("#botao-postar");
var form = document.querySelector("form");

var rad = form.rating;
var coment = form.comentario;
var prev = null;

botaoPostar.addEventListener("click", function (event) {
    event.defaultPrevented;
    for (var i = 0; i < rad.length; i++) {
        var resultado = (rad[i] = rad.value);
        console.log(resultado);

    };
    if (resultado == 5) {
        alert("Recebi 5 estrela");
        var imagens = document.querySelector(".imagem");
        var texto = document.createElement("p");
        texto.textContent = coment.value;
        var arrayImagem = [imagens, imagens, imagens, imagens, imagens];
        for (var i = 0; i < arrayImagem.length; i++) {
            const image = new Image(24, 24); // Largura (width) e altura (height).
            image.src = 'https://i.ibb.co/0KfbYB0/star1.png';
            imagens.appendChild(image);
        }
        imagens.appendChild(texto);
        
    } else if (resultado == 4) {
        alert("Recebi 4 estrela");
    } else if (resultado == 3) {
        alert("Recebi 3 estrela");
    } else if (resultado == 2) {
        alert("Recebi 2 estrela");
    } else if (resultado == 1) {
        alert("Recebi 1 estrela");
    } else {
        alert("ue não voto");
    }
});
