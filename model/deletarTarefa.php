<?php 
include('conexao.php');

if(!empty($_POST['idtarefa'])){
        $idTarefa = $_POST['idtarefa'];

        // Preparar e executar a consulta SQL para excluir a tarefa pelo nome
        $stmt = $mysqli->prepare("DELETE FROM tarefas WHERE id = ?");
        $stmt->bind_param("s", $idTarefa);
        $stmt->execute();
}
?>