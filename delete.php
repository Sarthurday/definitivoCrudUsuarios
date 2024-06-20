<?php
include 'config.php';  // Inclui a configuração do banco de dados

if (isset($_GET['id'])) {  // Verifica se o ID foi passado como parâmetro
    $idUser = $_GET['id'];

    // Deleta o registro da tabela pessoas
    $userInsert = "DELETE FROM usuarios WHERE idUsuario=$idUser";

    if ($conn->query($userInsert) === true) {
        header("Location: index.php");  // Redireciona para a página principal se a exclusão for bem-sucedida
        exit();
    } else {
        echo "Erro: " . $userInsert . "<br>" . $conn->error;  // Exibe um erro se a exclusão falhar
    }
}
$conn->close();  // Fecha a conexão com o banco de dados
?>