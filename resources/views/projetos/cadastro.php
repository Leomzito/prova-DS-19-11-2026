<?php
    require __DIR__ . "/../../../config/conexao.php"
    SESSION_START();
    $PDO->EXEC("CREATE TABLE IF NOT EXISTS funcionarios (
    nome varchar(100),
    email varchar(50),
    salario INT;
    tipo_funcionario varchar(50)");
    $mensagem="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $salario = $_POST["salario"];
        $tipo_funcionario = $_POST["tipo_funcionario"];
        $sql = "INSERT INTO jogos (nome, email, salario, tipo_funcionario)
            VALUES ('$nome', '$email', '$salario', '$tipo_funcionario')";
        $pdo->exec($sql);
        $mensagem = "Fucionário cadastrado com sucesso!";
    }
    $buscar = "SELECT*FROM funcionarios";
    $stmt = $pdo->fetchAll(PDO::FETCH_ASSOC);
?>