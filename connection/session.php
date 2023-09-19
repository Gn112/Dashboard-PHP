<?php 
session_start();

// Teste se há ua sessão ativa
if(!isset($_SESSION['user_id']))
{
    echo "Sem permissão para acesso a página<br>";
    echo '<a href="index.php">Ir para página inicial</a>';
    exit;
}

// Conexão com o banco de dados
require('./db_con.php')
?>