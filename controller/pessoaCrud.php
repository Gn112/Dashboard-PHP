<?php 
function inserirRegistro($pdo, $nome, $email, $senha)
{
    $sql = "INSERT INTO Pessoa (nome, email, senha) VALUES (:nome, :email, :senha)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    return $stmt->execute();
}
?>