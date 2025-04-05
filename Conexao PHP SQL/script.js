const container_conexao = document.querySelector('.bd_conexao');
const container_create = document.querySelector('.bd_create');
const container_search = document.querySelector('.bd_search');
const container_update = document.querySelector('.bd_update');
const container_delete = document.querySelector('.bd_delete');

function limparResultado() {
    console.log('Limpar resultado');
    let resultados = document.querySelectorAll('.search-result');
    resultados.forEach(resultado => {
        resultado.innerHTML = '';
    });
}



function criarUserForm() {
    container_conexao.style.display = 'none';
    container_create.style.display = 'block';
}

function procurarUserForm() {
    container_conexao.style.display = 'none';
    container_search.style.display = 'block';
}

function atualizarUserForm() {
    container_conexao.style.display = 'none';
    container_update.style.display = 'block';
}

function deletarUserForm() {
    container_conexao.style.display = 'none';
    container_delete.style.display = 'block';
}

function voltar() {
    window.location.reload()
}

function metodoEscolhido(element) {
    let metodo = element.textContent.toLowerCase();
    metodo = trocaCedilha(metodo);
    element.parentElement.style.display = 'none';
    let form = element.parentElement.nextElementSibling
    let inputMetodo = form.querySelector(`#${metodo}`);
    console.log(inputMetodo);
    inputMetodo.parentElement.style.display = 'flex';
    inputMetodo.style.display = 'block';
    inputMetodo.previousElementSibling.style.display = 'block';
}

function trocaCedilha(string) {
    string = string.replace(/[Ç]/,"C");
    string = string.replace(/[ç]/,"c");
    return string.replace(/[^a-z]/gi,'');
}

