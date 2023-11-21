<?php
if (!isset($_SESSION)) {
    session_start();
}

include('conexao.php');

if (isset($_POST['excluir'])) {
    $email = $_SESSION['email'];
    $senha = $_POST['senha'];

    $consulta = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
    $consulta->bind_param("s", $email);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($resultado->num_rows > 0) {
 
        $consultaExclusao = $mysqli->prepare("DELETE FROM usuarios WHERE email = ? AND senha = ?");
        $consultaExclusao->bind_param("ss", $email, $senha);
        $consultaExclusao->execute();

        if ($consultaExclusao->affected_rows > 0) {
            echo '<script type="text/javascript">window.alert("Cadastro deletado!")</script>';
            print"<script>location.href='index.php';</script>";
        } else {
            echo '<script type="text/javascript">window.alert("Senha incorreta!")</script>';
        }

        $consultaExclusao->close();
    } else {
        echo '<script type="text/javascript">window.alert("Usuário não encontrado!")</script>';
    }

    $consulta->close();
}
?>
