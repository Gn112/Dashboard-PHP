<?php
header('Content-Type: text/html; charset=utf-8'); // Setando Charset
?>

<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    if(!isset($_SESSION['user_id'])) {
        echo "Sem permissão para acesso a página<br>";
        echo '<a href="index.php">Ir para página inicial</a>';
        exit;
    }
    ?>
    <title>Painel do Usuário</title>
</head>
<body>
    <h2>Painel do Usuário</h2>
    <p>Bem-vindo, usuário!</p>

    <p><a href="geraPdf.php" target="_blank">Relatório Mensal - Gatos</a></p>
    <a href="logout.php">Sair</a>
</body>
</html>