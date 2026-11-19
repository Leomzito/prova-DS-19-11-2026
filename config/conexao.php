<?php
    $host = "localhost";
    $banco = "empresa_db";
    $usuario = "1234";
    $senha = "1234";
    try {
        $pdo=new PDO("mysql:$host;dbname=$banco; charset=utf8mb4",$usuario,$senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $erro) {
        echo"Erro ao conectar:", $erro ->getMessage();
    }
?>