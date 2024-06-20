<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<h2 class="mt-5">Gerenciador de Tarefas</h2>
<form action="create.php" method="post">
    <!-- <div class="form-group">
        <label for="id">ID</label>
        <input type="text" name="id" class="form-control" id="id" required>
    </div> -->
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" id="email" required>
    </div>
    <div class="form-group">
        <label for="cargo">Cargo</label>
        <input type="text" name="cargo" class="form-control" id="cargo" required>
    </div>
    <!-- <div class="form-group">
        <label for="titulo">Título da Tarefa</label>
        <input type="text" name="titulo" class="form-control" id="titulo" required>
    </div>
    <div class="form-group">
        <label for="descricao">Descrição da Tarefa</label>
        <input type="text" name="descricao" class="form-control" id="descricao"></label>
    </div>
    <div class="form-group">
        <label for="dataCriacao">Data Criação</label>
        <input type="date" name="dataCriacao" class="form-control" id="dataCriacao"></label>
    </div>
    <div class="form-group">
        <label for="dataConclusao">Data Conclusão</label>
        <input type="date" name="dataConclusao" class="form-control" id="dataConclusao"></label>
    </div>
    <div class="form-group">
        <label for="resp">Responsável</label>
        <input type="text" name="resp" class="form-control" id="resp"></label>
    </div> -->
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
        
   <h2 class="mt-5">Usuários</h2>
    <?php include __DIR__ . '/read.php'; ?>
</body>
</html>
