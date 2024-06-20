<?php
include 'config.php';  // Inclui a configuração do banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se os campos foram recebidos corretamente
    if (isset($_POST["id"], $_POST["nome"], $_POST["email"], $_POST["cargo"])) {
        $idUser = $_POST["id"];      // Obtém o valor do campo ID
        $nome = $_POST["nome"];      // Obtém o valor do campo nome
        $email = $_POST["email"];    // Obtém o valor do campo email
        $cargo = $_POST["cargo"];    // Obtém o valor do campo cargo

        // Use prepared statements para prevenir injeção SQL
        $stmt = $conn->prepare("UPDATE usuarios SET nome = ?, email = ?, cargo = ? WHERE idUsuario = ?");
        if ($stmt) {
            $stmt->bind_param("sssi", $nome, $email, $cargo, $idUser);
            if ($stmt->execute()) {
                echo "Atualização realizada com sucesso";  // Mensagem de sucesso para depuração
                header("Location: index.php");  // Redireciona para a página principal se a atualização for bem-sucedida
                exit();
            } else {
                echo "Erro ao executar a atualização: " . $stmt->error;  // Exibe um erro se a execução da atualização falhar
            }
        } else {
            echo "Erro ao preparar a consulta: " . $conn->error;  // Exibe um erro se a preparação da consulta falhar
        }

        $stmt->close();  // Fecha a declaração
    } else {
        echo "Dados incompletos recebidos do formulário";  // Exibe mensagem se algum dado estiver faltando
    }
} else {
    echo "Método de requisição inválido";  // Exibe mensagem se o método da requisição não for POST
}

$conn->close();  // Fecha a conexão com o banco de dados
?>