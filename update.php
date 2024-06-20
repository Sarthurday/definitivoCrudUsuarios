<?php
include 'config.php';

if (isset($_GET['id'])) {
    $idUser = $_GET['id'];

    // Prepara a consulta parametrizada para selecionar o usuário pelo ID
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");
    $stmt->bind_param("i", $idUser);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Usuário não encontrado.";
        exit();
    }

    $stmt->close(); // Fecha a declaração preparada
} else {
    echo "ID do usuário não fornecido.";
    exit();
}

$conn->close(); // Fecha a conexão com o banco de dados
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Pessoa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="mt-5">Atualizar Pessoa</h2>

    <?php if (isset($row)): ?> <!-- Verifica se $row está definido -->
        <!-- Formulário para atualizar a pessoa -->
        <form action="update_process.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['idUsuario']); ?>"> <!-- Campo oculto com o ID -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" value="<?php echo htmlspecialchars($row['nome']); ?>" required> <!-- Campo para o nome -->
            </div>
            <div class="form-group">
                <label for="email">Sobrenome</label>
                <input type="text" name="email" class="form-control" id="email" value="<?php echo htmlspecialchars($row['email']); ?>" required> <!-- Campo para o sobrenome -->
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" name="cargo" class="form-control" id="cargo" value="<?php echo htmlspecialchars($row['cargo']); ?>" required> <!-- Campo para o cargo -->
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button> <!-- Botão para enviar o formulário -->
        </form>
    <?php endif; ?>

</div>
</body>
</html>