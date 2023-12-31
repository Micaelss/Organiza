<?php

include('./model/cadastrarUsuario.php')

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Organiza+</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="icon" href="./img/icone.ico">
</head>

<body>

<!-- Imagem de fundo-->
<div class="img-background">

    <div class="container-form">
        <div class="bt-fechar">
            <a href="index.php"><ion-icon name="close-outline">Fechar</ion-icon></a>
        </div>
        <div class="container-login">

            <!-- Logo acima do formulário-->
            <div class="logo">
                <img src="./img/logo.svg" alt="">
            </div>
            <h2>Cadastro de usuário</h2>

            <form method="post" action="">

                <!-- Entrada de Nome-->
                <div class="dados-form">
                    <span class="icone"><ion-icon name="people-outline"></ion-icon></ion-icon></span>
                    <input type="text" placeholder="Digite seu nome" id="nome" name="nome">
                </div>
                <!-- Entrada de Email-->
                <div class="dados-form">
                        <span class="icone"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" placeholder="Digite seu melhor e-mail" id="email" name="email">
                </div>
                <!-- Entrada de Senha-->
                <div class="dados-form">
                        <span class="icone"><ion-icon name="finger-print-outline"></ion-icon></span>
                        <input type="password" placeholder="Digite sua senha" id="senha" name="senha">
                </div>
                <!-- Confirmação de Senha-->
                <div class="dados-form">
                    <span class="icone"><ion-icon name="finger-print-outline"></ion-icon></span>
                    <input type="password" placeholder="Confirme a senha" id="confirm_senha" name="confirm_senha">
            </div>
                <!-- Botão de Cadastro-->
                <button type="submit" class="bt-cadastro" name="submit" >Cadastrar</button>
            </form>
        </div>
    </div>

    <!-- Primeira nota flutuante com informações-->
    <div class="informacoes">
        <div class="informacoes-cabecalho">
            <span><ion-icon name="file-tray-full-outline"></ion-icon></span> 
            <p> Sua vida + Organizada</p>
        </div>
        <div class="informacoes-texto">
            O nosso Sistema de Gerenciamento de Tarefas simplifica o controle das suas
            atividades diárias, permitindo que você acompanhe, priorize e planeje com
            eficiência. Torne o gerenciamento de tarefas fácil e produtivo.
            Não perca mais tempo!

        </div>
    </div>

    <!-- Segunda nota flutuante com informações-->
    <div class="informacoes2">
        <div class="informacoes-cabecalho2">
            <span><ion-icon name="timer-outline"></ion-icon></span> 
            <p>Você + Produtivo</p>
        </div>
        <div class="informacoes-texto2">
            Dê um impulso à sua eficiência, domine seu tempo, concentre-se nas tarefas importantes
             e alcance seus objetivos de forma rápida e sem esforço.
        </div>
    </div>

    <!-- Terceira nota flutuante com informações-->
    <div class="informacoes3">
        <div class="informacoes-cabecalho3">
            <span><ion-icon name="sync-outline"></ion-icon></span> 
            <p>Muito + Prático</p>
        </div>
        <div class="informacoes-texto3">
            Seja organizado em todos os aspectos 
            da sua vida, com um único aplicativo.

        </div>
    </div>

    <!-- Rodapé de Copyright-->
    <div class="rodape">
        <p>© Organiza+ Todos os Direitos Reservados - 2023</p>
    </div>
</div>

<!-- Script de icones do ionicons-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>