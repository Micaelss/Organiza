<?php

include("./model/protect.php");
include("./model/inserirTarefa.php");
include("./model/deletarTarefa.php");

# Iniciar a sessão
if(!isset($_SESSION)){
    session_start();
}

# Inicializar $priNome
$priNome = '';

# Verificar se o nome está definido na sessão
if(isset($_SESSION['nome'])){
    $nomeCompleto = $_SESSION['nome'];
    $nomeDividido = explode(' ', $nomeCompleto);
    $priNome = $nomeDividido[0];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organiza+</title>
    <link href="./style/style-tarefas.css" rel="stylesheet">
    <link rel="icon" href="./img/icone.ico">

</head>

<body>

    <!-- Ajustes no topo da página-->
    <div class="ajustes">
        <img src="./img/desconhecido.png">
        <p>Olá,<?php echo $priNome ;?> </p>
    </div>

    <!-- Caixa de alterar senha no topo da página-->
    <a href="tela_dados_usuario.php"><div class="alterar-senha">
        <ion-icon name="settings-outline"></ion-icon>
        <p id="alterar-senha">Configurações</p>
    </div></a>

    <!-- Caixa de logoff-->
    <div class="logoff">
        <a href="model/logoff.php" onclick="notificacao()">
            <p><ion-icon name="power-outline"></ion-icon>Sair</p>
        </a>
    </div>
   
    <main>
        <!--Logo no topo da página-->
        <div class="img-logo"></div>

        <!--Formulário para adicionar tarefas-->
        <form class="add-tarefas" method="post">
            <input type="text" placeholder="Insira o nome da tarefa" class="input-tarefa" name="tarefa" id="tarefa">
            <button type="submit" href="#" id="btn-adicionar-tarefa" name="submit">+</button>
        </form>
        <!--Formulário para exclusão de tarefas, oculto-->
        <form method="post" name="exclusao">
            <input type="hidden" placeholder="id tarefa" class="input-tarefa" name="idtarefa" id="idtarefa">
        </form>
        <!--Tabela com os dados inputados pelo usuário-->
        <table>

            <thead class="cabeçalho">
                <tr>
                    <th style="width: 25px;" class="ocultar-coluna">ID</th>
                    <th style="width: 80px;">Criada em</th>
                    <th>Tarefa</th>
                    <th style="width: 120px;">Prazo</th>
                    <th style="width: 120px;">Status</th>
                    <th class="opcoes">Opções</th>
                </tr>
            </thead>

            <!-- Aqui serão inseridos as TR´s criadas pelo usuário-->
            <tbody>
                <?php
                include("./model/listaTarefas.php");
                ?>

            </tbody>
            
        </table>
    </main>
</body>

<!-- Script de icones do ionicons-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<!-- Script importado do controller-->
<script src="./controller/controle_tela_tarefas.js"></script>

</html>
