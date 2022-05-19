<?php
    // $_POST['marca'] = '...';
    $marca = $_POST['marca'];
    $cor = $_POST['cor'];
    $ano = $_POST['Ano'];
    $tamanho = $_POST['TAMANHO'];

    $fp = fopen('data.csv', 'a');
    fwrite($fp, $marca . ',' . $cor . ',' . $ano .',' . $tamanho . PHP_EOL); // \n no linux, \r\n no windows

    header('location: index.php');
?>