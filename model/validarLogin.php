<?php
include("conexao.php");

if(isset($_POST['email']) || isset($_POST['senha'])) {
        #verificar se email e senha estão em branco
    if(strlen($_POST['email']) == 0){
        echo '<script type="text/javascript">window.alert("Preencha seu E-mail");</script>'; 
    }else if(strlen($_POST['senha']) == 0){
        echo '<script type="text/javascript">window.alert("Preencha sua Senha")</script>';
    }else{
        
        #limpar o email e senha
        $email= $mysqli->real_escape_string($_POST['email']);
        $senha= $mysqli->real_escape_string($_POST['senha']);

    #codigo para login
    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error);
    #verificar se a quantidade de registros ou seja existe usuario e senha.
    $quantidade = $sql_query->num_rows;
    if($quantidade == 1){
        $usuario = $sql_query->fetch_assoc();
        #iniciar uma nova seção
        if(!isset($_SESSION)){
            session_start();
        }
        #manter ativo na nova seção
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] =$usuario['email'];
        #redicionar para outra pagina ao logar
        header("Location:tela_tarefas.php");
        }
    #se não existir exibir
    else{
        echo '<script type="text/javascript">window.alert("Usuário ou Senha incorretos!")</script>';
    }
    }   
}
?>