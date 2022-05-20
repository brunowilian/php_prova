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
    <h1>Comprar Sapatos</h1>
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
    <form action="add-sapato.php" method="POST">
        <input type="text" name="marca" placeholder="Marca" require="require">
        <input type="text" name="cor" require_once placeholder="Cor">
        <input type="text" name="modelo" placeholder="Modelo">
        <select name="TAMANHO">
            <option value="35/36"> Tamanho 35/36</option>
            <option value="37/38"> Tamanho 37/38</option>
            <option value="39/40"> Tamanho 39/40</option>
            <option value="41/42"> Tamanho 41/42</option>
            <option value="43/44"> Tamanho 43/44</option>
        </select>
        <input type="submit" value="adicionar">
    </form>
    <!-- <form action="delete.php">
        <input type="number" name="linha" placeholder="linha">
        <input type="submit" value="remover">
    </form> -->
</body>
</html>