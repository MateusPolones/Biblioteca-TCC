<?php
$conexao = new mysqli("localhost", "root", "", "biblioteca_oswaldo_walder");

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

echo "Conectado com sucesso!";
?>