<?php
// Verifica se o usuário está logado
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redireciona para a página de login se não estiver logado
    exit();
}

// Exibe o menu interno
echo '<h1>Bem-vindo, ' . $_SESSION['username'] . '</h1>';
echo '<ul>';
echo '<li><a href="pagina1.php">Página 1</a></li>';
echo '<li><a href="pagina2.php">Página 2</a></li>';
echo '<li><a href="pagina3.php">Página 3</a></li>';
echo '<li><a href="logout.php">Logout</a></li>';
echo '</ul>';
?>
