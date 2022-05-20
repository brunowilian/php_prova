<?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header('location: index.php');
        exit();
    }

?>
<h1>Bem vindo, tu tá autenticado (<?= $_SESSION['usuario'] ?>)</h1>


<a href="logout.php">Sair</a>



<style>
    h1{
        color: orange;
    }
</style>