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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionários</title>
</head>
<body>
    <nav><a href="index.php">Página Inicial</nav>
    <h1>Cadastrar funcionário</h1>
    <form method="POST">
        <label for="nome">Nome do funcionário</label>
        <input type="text" id="nome" name="nome" maxlenght="100" placeholder="Nome do funcionário" required>
    <?php
        if ($mensagem!="") {
            echo"<p>".$mensagem."</p>";
        }
    ?>
    <div class = "tabela_cadastro">
        <h2>Funcionários cadastrados</h2>
        <table>
            <tr>
                <th>ID:</th>
                <th>NOME:</th>
                <th>EMAIL:</th>
                <th>SALÁRIO:</th>
                <th>TIPO DE FUNCIONÁRIO:</th>
            </tr>
            <?php foreach($funcionarios as funcionario) {?>
                <tr>
                    <td><?= funcionario["id"] ?></td>
                    <td><?= funcionario["nome"] ?></td>
                    <td><?= funcionario["email"] ?></td>
                    <td><?= funcionario["salario"] ?></td>
                    <td><?= funcionario["tipo_funcionario"] ?></td>
                </tr>
            <?php}?>
        </table>
    </div>
</body>
</html>