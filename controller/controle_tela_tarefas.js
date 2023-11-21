

/*Função que para editar os dados da linha*/
function editarTarefa(item) {

    /*selecionando a coluna 3 da tabela(Tarefa)*/
    const linha = item.parentElement.parentElement;
    const colunaTarefa = linha.querySelector("td:nth-child(3)");

    /* Verifica se a célula está editável*/
    if (colunaTarefa.classList.contains("editavel")) {
        colunaTarefa.contentEditable = false;
        colunaTarefa.classList.remove("editavel");
    } else {
        colunaTarefa.contentEditable = true;
        colunaTarefa.classList.add("editavel");
        colunaTarefa.focus();

        // Enter confirma a alteração

        colunaTarefa.addEventListener("keypress", function (e) {
            if (e.key === "Enter") {
                e.preventDefault();
                colunaTarefa.contentEditable = false;
                colunaTarefa.classList.remove("editavel");
            }
        });
    }
}

// Remover o item focado
function excluirTarefa(item) {

    const tarefaSelecionada = item.parentElement.parentElement;
    const tarefaSelecionadaTexto = tarefaSelecionada.querySelector("td:nth-child(3)").textContent;
    const tarefaSelecionadaId = tarefaSelecionada.querySelector("td:nth-child(1)").textContent;
    document.getElementById("idtarefa").value = tarefaSelecionadaId;

    const opcaoConfirmExclusao = window.confirm('Tem certeza que deseja excluir a tarefa: \n'+ tarefaSelecionadaTexto);
    if(opcaoConfirmExclusao == true){

        tarefaSelecionada.remove();

        //Enviar o formulário oculto que contém a ID da tarefa
        document.forms['exclusao'].submit();
        
    }
    
}

function notificacao(){
    alert('O usuário foi desconectado!');

}

/* Espera o carregamento completo da página antes de executar o código */
document.addEventListener("DOMContentLoaded", function () {

    /* Seleciona o botão dentro do elemento com a classe "add-tarefas" */
    const add = document.querySelector(".add-tarefas button");
    
    /* Adiciona um evento de clique ao botão selecionado, chamando a função adicionarTarefa */
    add.addEventListener("click", adicionarTarefa);

    /* Seleciona o elemento tbody dentro da tabela (se existir) */
    const tabela = document.querySelector("table tbody");

    // Verifica se foi encontrada a tabela
    if (tabela) {
        /* Adiciona um evento de clique ao tbody da tabela */
        tabela.addEventListener("click", function (event) {
            /* Verifica se o elemento clicado é um botão */
            if (event.target.tagName === "BUTTON") {
                /* Chama a função editarTarefa, passando o botão clicado como argumento */
                editarTarefa(event.target);
            }
        });
    }
});
