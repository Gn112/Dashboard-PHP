<?php
header('Content-Type: text/html; charset=utf-8'); // Setando Charset
require('../connection/session.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel do Usuário</title>
</head>
<body>
    <h2>Painel do Usuário</h2>
    <p>Bem-vindo, usuário!</p>
    <hr>
    <p><a href="geraPdf.php" target="_blank">Relatório Mensal</a></p>
    <a href="logout.php">Sair</a>
</body>
</html>