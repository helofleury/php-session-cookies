<?php
session_start();

// Remove todos os dados da sessão
session_unset();

// Destrói a sessão
session_destroy();

// Remove o cookie do usuário
setcookie('name_user', '', time() - 86400, "/");

// Redireciona para a tela de login

header("Location: login.php");
exit();
