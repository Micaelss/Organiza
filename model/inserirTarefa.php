<?php 
include('conexao.php');
if(!isset($_SESSION)){
    session_start();
}
if (isset($_POST['submit'])) {
    if(!empty($_POST['tarefa'])){

        date_default_timezone_set('America/Sao_Paulo');

        $dataCriacao = date('d-m-Y H:i:s');
        $tarefa = $_POST['tarefa'];
        $status = 'Pendente';

        // Capturar a data atual
        $dataPrazo = new DateTime('now');
        
        // Adicionar 7 dias ao prazo
        $dataPrazo->modify('+7 days');
        
        // Formatar a data
        $prazo = $dataPrazo->format('Y-m-d');
        
        $idCriado = $_SESSION['id'];

        $sql = $mysqli->prepare("INSERT INTO tarefas VALUES(NULL,?,?,?,?,?)");
        $sql->bind_param("sssss", $dataCriacao, $tarefa, $prazo, $status, $idCriado);
        $sql->execute();
        echo '<script type="text/javascript">window.alert("Tarefa adicionada com sucesso!")</script>';
    }else{
        if(empty($_POST['idtarefa'])){
        echo '<script type="text/javascript">window.alert("Tarefa não pode ser em Branco!")</script>';
        }
    }
}
?>

