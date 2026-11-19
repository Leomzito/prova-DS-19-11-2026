<?php
    require __DIR__ . "/../../config/conexao.php";
    echo"<br>Sistema conectado";
    $sql = "CREATE TABLE IF NOT EXISTS teste (
        id INT AUTO INCREMENT PRIMARY KEY,
        nome varchar (100) NOT NULL,
        idade INT NOT NULL)";
    $pdo->exec($sql);
    echo"<br>TABELA CRIADA COM SUCESSO";
?>