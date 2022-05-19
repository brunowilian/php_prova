<?php
    session_start();

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $fp = fopen('users.csv', 'r');
    $data = [];
    while ($row = fgets($fp)) {
        $data[] = $row;
    }

    foreach($data as $row) {
        $parts = explode(',', $row);
        // var_dump($usuario, $senha, $parts[0], trim($parts[1]));
        // exit();
        if ($usuario == $parts[0] && $senha == trim($parts[1])) {
            $_SESSION['usuario'] = $parts[0];
        }
    }

    header('location: home.php');
    
?>