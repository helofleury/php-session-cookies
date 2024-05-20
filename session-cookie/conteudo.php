<?php
session_start();

// Verifica se o usuário está logado
//!isset: Retorna verdadeiro (true) se a variável não estiver definida
if (!isset($_SESSION['name_user'])) {
    /* Ao tentar acessar a página de conteúdo diretamente (url) e 
    não estiver logado, o sistema informa na tela "Acesso negado!"*/
    echo "Acesso negado!";
    ?>
    <!-- Inclui um link de logout -->
    <html><br><br>
    <a href="logout.php">Logout</a>
    </html>
    
    <?php
    exit();
}
//A função explode() divide uma string em partes
// Quando o usuário logar vai exibir uma mensagem de "Bem-vindo(a)" seguido pelo primeiro nome começando em maiúsculo do e-mail antes do "@"
$name = ucfirst(explode('@', $_SESSION['name_user'])[0]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conteúdo</title>
</head>

<body>
    <h2>Bem-vindo(a), <?php echo $name; ?>!</h2>
    <h3>Perfil do Usuário</h3>
    <ul>
        <li>Nome: <?php echo $name = ucfirst(explode('@', $_SESSION['name_user'])[0]); ?> </li>
        <li>E-mail: <?php echo $_SESSION['name_user']; ?></li>
        <li>Data de Registro: dd/mm/aaaa</li>

    </ul>

    <h3>Configurações da Conta</h3>
    <ul>
        <li><a href="#">Alterar Senha</a></li>
        <li><a href="#">Atualizar E-mail</a></li>

    </ul>

    <h3>Links Úteis</h3>
    <ul>
        <li><a href="#">Perguntas Frequentes</a></li>
        <li><a href="#">Suporte</a></li>

    </ul>
    <a href="logout.php">Logout</a>
</body>

</html>