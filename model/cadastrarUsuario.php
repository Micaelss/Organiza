<?php
include('conexao.php');

if (isset($_POST['submit'])) {
    if (empty($_POST['nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['confirm_senha'])) {
        echo '<script type="text/javascript">window.alert("Verifique se todos os campos estão preenchidos!")</script>';
    } elseif ($_POST['senha'] != $_POST['confirm_senha']) {
        echo '<script type="text/javascript">window.alert("Senhas não conferem!")</script>';
    } else {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = $mysqli->prepare("INSERT INTO usuarios VALUES(NULL,?,?,?)");
        $sql->bind_param("sss", $nome, $email, $senha);
        $sql->execute();
        echo '<script type="text/javascript">window.alert("Usuário cadastrado com sucesso!")</script>';
        print"<script>location.href='index.php';</script>";
    }
}
?>

