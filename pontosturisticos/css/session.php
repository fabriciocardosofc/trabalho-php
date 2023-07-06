<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php"); // Redirecione para a página de login se não estiver logado
    exit;
}
?>

<!DOCTYPE html>
<html>
<head
