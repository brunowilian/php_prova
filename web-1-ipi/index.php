<?php
    $fp = fopen('data.csv', 'r');
    $data = [];
    while ($row = fgets($fp)) {
        $data[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border: 1px solid red;
            border-collapse: collapse;
        }

        tr:nth-child(even) {
            background: cyan;
        }
        td {
            padding: .5em;
        }
    </style>
</head>
<body>
    <h1>Carros Anos 2022</h1>
    <table>
        <?php foreach($data as $linha => $row): ?>
            <?php $partes = explode(',', $row) ?>
            <tr>
                <!-- <td><?= $linha ?></td> -->
                <td><?= $partes[0] ?></td>
                <td><?= $partes[1] ?></td>
                <td><?= $partes[2] ?></td>
                <td><?= $partes[3] ?></td>
                <td>
                    <a href="delete.php?linha=<?= $linha ?>">Remover</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <!-- <a href="delete.php?linha=3">Remover linha 3</a> -->
    <form action="add-camisa.php" method="POST">
        <input type="text" name="marca" placeholder="marca">
        <input type="text" name="cor" placeholder="cor">
        <input type="text" name="Ano" placeholder="Ano">
        <select name="TAMANHO">
            <option value="PP">tamanho pp</option>
            <option value="P">pequeno</option>
            <option value="M">médio</option>
            <option value="G">grande</option>
            <option value="GG">tamanho ivo</option>
        </select>
        <input type="submit" value="adicionar">
    </form>
    <!-- <form action="delete.php">
        <input type="number" name="linha" placeholder="linha">
        <input type="submit" value="remover">
    </form> -->
</body>
</html>