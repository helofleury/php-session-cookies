<?php
session_start();

// Verifica se o usuário está logado
// isset: Retorna verdadeiro (true) se a variável estiver definida
if (isset($_SESSION['name_user'])) {
    header("Location: conteudo.php");
}

// Verifica se os dados de login foram enviados através do método POST
if (isset($_POST['email']) && isset($_POST['senha'])) {

    // Atribui os valores recebidos do formulário às variáveis $email e $senha
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o email e a senha estão corretos
    if ($email === 'usuario@gmail.com' && $senha === '@1234') {
        // Define o nome do usuário na sessão
        $_SESSION['name_user'] = $email;

        // Cria um cookie com o nome do usuário, válido por 1 dia
        setcookie('name_user', $email, time() + (24 * 3600), "/");

        // Redireciona o usuário para a página de conteúdo
        header("Location: conteudo.php");
        exit(); // Termina a execução do script para evitar que mais código seja executado
    } else {
        // Se o email ou senha estiverem incorretos, define uma mensagem de erro
        $alerta = "E-mail ou senha incorretos!";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>

<body>

    <h2>Faça seu login</h2>
    <?php if (isset($alerta))
        echo "<p>$alerta</p>"; ?>

    <form method="post" action="">
        <label for="email">E-mail:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>
        <input type="submit" value="Entrar" id="botao">
    </form>

</body>

</html>