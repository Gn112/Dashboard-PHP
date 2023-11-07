<?php
header('Content-Type: text/html; charset=utf-8'); // Setando Charset
require('connection/db_con.php');

session_start();

if (isset($_SESSION['id'])) {
  header("Location: ./src/dashboard.php");
  exit;
}

$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Obtem os dados do formulário
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Função para verificar o registro no do banco de dados
  $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $password);
  $stmt->execute();

  // Verifica se há um registro correspondente
  if ($stmt->rowCount() > 0) {
    // O login foi bem-sucedido, redireciona para a página de boas-vindas
    $_SESSION['id'] = 1;
    header('Location: ./src/dashboard.php');
    exit();
  } else {
    // O login falhou, exibe uma mensagem de erro
    $message = 'Nome de usuário ou senha incorretos';
    session_destroy();
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página de Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex justify-center items-center">
  <div class="bg-white p-8 rounded shadow-md w-96">
    <h1 class="text-2xl font-semibold mb-4">Login</h1>
    <form method="post">
      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="text" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
        <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
      </div>
      <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md hover:bg-blue-600">Entrar</button>
    </form>
    <p class="mt-3 text-red-500"><?php echo $message; ?></p>
  </div>
</body>

</html>