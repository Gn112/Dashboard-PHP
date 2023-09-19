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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (inserirRegistro($pdo, $nome, $email, $senha)) {
        $_SESSION['mensagem'] = 'Registro inserido com sucesso!';
    } else {
        $_SESSION['mensagem'] = 'Erro ao inserir o registro.';
    }
}

?>