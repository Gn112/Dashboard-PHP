<?php
$host = 'localhost';
$dbname = 'aula_pdo';
$username = 'root';
$password = '';

try
{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully!!!";
}

catch (PDOException $e)
{
    die("Connected Failed: " . $e->getMessage());
}
?>