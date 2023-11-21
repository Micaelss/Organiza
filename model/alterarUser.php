<?php
if (!isset($_SESSION)) {
    session_start();
}

include('conexao.php');

if (isset($_POST['alterar'])) {
    $email = $_SESSION['email'];
    $senhaAntiga = $_POST['senhaAntiga'];
    $novaSenha = $_POST['novaSenha'];

    // Verifica se o usuário com o email e senha antiga existe
    $consulta = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
    $consulta->bind_param("ss", $email, $senhaAntiga);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($resultado->num_rows > 0) {
        // Atualiza a senha para a nova senha
        $consultaAtualizacao = $mysqli->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
        $consultaAtualizacao->bind_param("ss", $novaSenha, $email);
        $consultaAtualizacao->execute();

        if ($consultaAtualizacao->affected_rows > 0) {
            echo '<script type="text/javascript">window.alert("Senha alterada com sucesso!")</script>';
            print"<script>location.href='tela_tarefas.php';</script>";
        } else {
            echo '<script type="text/javascript">window.alert("Erro ao alterar senha!")</script>';
        }

        $consultaAtualizacao->close();
    } else {
        echo '<script type="text/javascript">window.alert("Senha antiga incorreta ou usuário não encontrado!")</script>';
    }

    $consulta->close();
}
?>
