<?php
include 'config.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cargo = $_POST["cargo"];
    // $titulo = $_POST["titulo"];
    // $descricao = $_POST["descricao"];
    // $status = $_POST["status"];
    // $data_criacao = $_POST["data_criacao"];
    // $data_conclusao = $_POST["data_conclusao"];
    // $responsavel = $_POST["responsavel"];
    // inserindo na tabela
    $userInsert = "INSERT INTO usuarios (nome, email, cargo) VALUES ('$nome', '$email','$cargo')";
    
    // $taskInsert = "INSERT INTO tarefas (titulo, descricao, status, data_criacao, data_conclusao, responsavel) VALUES ('$titulo', '$descricao', '$status', '$data_criacao', '$data_conclusao', '$responsavel')";

    if($conn->query($userInsert) === true){
        header("Location: index.php"); //redireciona para a o index se der tudo certo
        exit();
    }else{
        echo "Erro: " . $userInsert . "<br>"; //retorna erro
    }

    // if($conn->query($taskInsert) === true){
    //     header("Location: index.php"); //redireciona para a o index se der tudo certo
    //     exit();
    // }else{
    //     echo "Erro: " . $taskInsert . "<br>"; //retorna erro
    //
}

$conn->close();
?>