<?php

include('conexao.php');

if(!isset($_SESSION)){
    session_start();
}

$sql = $mysqli->prepare("SELECT * FROM tarefas WHERE id_criado = ?");
$sql->bind_param("s", $_SESSION['id']);
$sql->execute();

$resultado = $sql->get_result();

if ($resultado) {
    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            // Extrair dados da linha
            $id = $linha["id"];
            $dataCriacao = $linha['criacao'];
            $tarefa = $linha['tarefa'];
            $prazo = $linha['prazo'];
            $status = $linha['status'];

            // Gerar HTML para cada linha
            echo '<tr>';
            echo '<td class="ocultar-coluna">' . $id . '</td>';
            echo '<td>' . $dataCriacao . '</td>';
            echo '<td>' . $tarefa . '</td>';
            echo '<td><input type="date" class="ent-data" value="' . $prazo . '"></td>';
            echo '<td>';
            echo '<select>';
            echo '<option value="pendente" ' . ($status == 'pendente' ? 'selected' : '') . '>Pendente</option>';
            echo '<option value="em andamento" ' . ($status == 'em andamento' ? 'selected' : '') . '>Em Andamento</option>';
            echo '<option value="concluida" ' . ($status == 'concluida' ? 'selected' : '') . '>Concluída</option>';
            echo '</select>';
            echo '</td>';
            echo '<td>';
            echo '<button type="button" class="bt-opcoes" onclick="editarTarefa(this)"><ion-icon name="create-outline"></ion-icon></button>';
            echo '<button type="button" class="bt-opcoes" onclick="excluirTarefa(this)"><ion-icon name="trash-outline"></ion-icon></button>';
            echo '</td>';
            echo '</tr>';
        }
    } else {
        echo "Nenhuma tarefa encontrada.";
    }

    $resultado->free();
} else {
    echo "Erro na consulta: " . $mysqli->error;
}

$mysqli->close();

?>
