function pesquisar(){
    window.alert("Pesquisando...");
}
function goToLink(value){
    const links ={
        '0': 'index.html',
        '1': 'https//www.friv.com',
        '2': 'samba.html',
        '3': 'classica.html'
    };
    if (links[value]){
        window.location.href = links[value];
    }
}
const nome = "Mateus Juan";
document.getElementById("nome").textContent = nome;

/*////////////////////////////////////////////////*/

document.addEventListener("DOMContentLoaded", function() {
    // Verifica se o nome da página é "index.html"
    if (window.location.pathname.endsWith("index.html")) {
        // Seleciona o elemento com o ID "todos_li1"
        const elemento = document.getElementById("todos_li1");
        
        // Verifica se o elemento existe e muda a cor de fundo
        if (elemento) {
            elemento.style.backgroundColor = "#746b60";
            elemento.style.borderRadius = "15px";        
        }
    }
});

/////////////////////////////////////////////////////////////////

function selecionar(genre) {
    let conteudo = '';
    if (genre === 'todos') {
        document.getElementById("todos").style.backgroundColor = "#746b60";
        document.getElementById("todos").style.borderRadius = "15px";
        conteudo = `
            <h2>Todos os gêneros selecionados</h2>
            <p>Aqui vai o conteúdo de todos os gêneros que você selecionar.</p>
        `;
    } else if (genre === 'gospel') {
        document.getElementById("gospel").style.backgroundColor = "#746b60";
        document.getElementById("gospel").style.borderRadius = "15px";
        conteudo = `
            <h2>Gospel/Religioso</h2>
            <ul>
            <a href="vocalLivre.html">
                <li>Vocal Livre</li>
            </a>
            </ul>

        `;
    } else if (genre === 'rock') {
        document.getElementById("rock").style.backgroundColor = "#746b60";
        document.getElementById("rock").style.borderRadius = "15px";
        conteudo = `
            <h2>Rock</h2>
            <p>Aqui está o conteúdo de músicas de rock que você selecionou.</p>
        `;
    }

    document.getElementById('conteudo-selecionado').innerHTML = conteudo;
}

////////////////////////////////////////////////////////////////////////////////

/*function goToLink(tipos){
    const links = {
        '0': 'https://vocallivre.com.br/wp-content/uploads/2019/03/A-Comecar-em-Mim-Base.pdf',
        '1': 'https://vocallivre.com.br/wp-content/uploads/2019/03/A-Comecar-em-Mim-Vocal.pdf',
    };
    if (links[tipos]){
        window.location.href = links[tipos];
    }
}*/