<?php

include("./model/protect.php");
include("./model/deletarUser.php");


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
    <link rel="stylesheet" href="./style/style_dados_usuario.css">
    <link rel="icon" href="./img/icone.ico">
</head>

<body>

<!-- Imagem de fundo-->
<div class="img-background">

    <div class="container-form">
        <div class="container-excluir">

            <!-- Logo acima do formulário-->
            <div class="logo">
                <img src="./img/logo.svg" alt="">
            </div>
            <h2>Excluir usuário</h2>

            <form method="POST" action="">

                <!-- Entrada de Email-->
                <div class="dados-form-1">
                    <span class="icone"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="text" id="email" name="email" value="<?php echo $email ;?>" disabled>
                </div>
                <!-- Entrada de Senha-->
                <div class="dados-form">
                        <span class="icone"><ion-icon name="finger-print-outline"></ion-icon></span>
                        <input type="password" placeholder="Digite sua senha para excluir" id="senha" name="senha">
                </div>
                <!-- Botão de Login-->
                <button type="submit" class="bt-excluir" name="excluir">Excluir</button>
                <a href="tela_alterar_senha.php"><button type="button" class="bt-alterar" >Alterar Senha</button></a>
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