<?php

include("./model/protect.php");
include("./model/alterarUser.php");

# Iniciar a sessão
if(!isset($_SESSION)){
    session_start();
}


# Verificar se o nome está definido na sessão
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Organiza+</title>
    <link rel="stylesheet" href="./style/style_alterar_senha.css">
    <link rel="icon" href="./img/icone.ico">
</head>

<body>

<!-- Imagem de fundo-->
<div class="img-background">

    <div class="container-form">
        <div class="bt-fechar">
            <a href="tela_tarefas.php"><ion-icon name="close-outline">Fechar</ion-icon></a>
        </div>
        <div class="container-login">

            <!-- Logo acima do formulário-->
            <div class="logo">
                <img src="./img/logo.svg" alt="">
            </div>
            <h2>Alterar Senha</h2>

            <form method="post" action="">
                <!-- Entrada de Email-->
                <div class="dados-form-email">
                        <span class="icone"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" id="email" name="email" value="<?php echo $email ;?>" disabled>
                </div>
                <!-- Entrada de Senha-->
                <div class="dados-form">
                        <span class="icone"><ion-icon name="finger-print-outline"></ion-icon></span>
                        <input type="password" placeholder="Digite a senha anterior" id="senhaAntiga" name="senhaAntiga">
                </div>
                <!-- Confirmação de Senha-->
                <div class="dados-form">
                    <span class="icone"><ion-icon name="finger-print-outline"></ion-icon></span>
                    <input type="password" placeholder="Digite a nova senha" id="novaSenha" name="novaSenha">
            </div>
                <!-- Botão de Cadastro-->
                <button type="submit" class="bt-confirmar" name="alterar" >Confirmar Alteração</button>
                <a href="tela_tarefas.php"><button type="button" class="bt-cancelar" >Cancelar</button></a>
            </form>
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