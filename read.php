<?php
include 'config.php';

$userInsert = "SELECT * FROM usuarios";
$result = $conn->query($userInsert);

if ($result->num_rows > 0) {  // Verifica se há registros retornados
    echo '<table class="table table-bordered">';
    echo '<tr><th>ID</th><th>Nome</th><th>Email</th><th>Cargo</th><th>Ação</th></tr>';
    while ($row = $result->fetch_assoc()) {  // Loop através de cada registro retornado
        echo '<tr>';
        echo '<td>' . $row["idUsuario"] . '</td>';
        echo '<td>' . $row["nome"] . '</td>';
        echo '<td>' . $row["email"] . '</td>';
        echo '<td>' . $row["cargo"] . '</td>';
        echo '<td>';
        echo '<a href="update.php?id=' . $row["idUsuario"] . '" class="btn btn-success">Editar</a> ';  // Link para editar
        echo '<a href="delete.php?id=' . $row["idUsuario"] . '" class="btn btn-danger">Excluir</a>';    // Link para deletar
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 resultados";  // Exibe mensagem se não houver registros
}

$conn->close();  // Fecha a conexão com o banco de dados
?>
