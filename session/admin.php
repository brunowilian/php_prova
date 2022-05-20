<?php

$fp = fopen('users.csv', 'r');
$data = [];
while ($row = fgets($fp)) {
    $data[] = $row;
}
?>

<table>
        <?php foreach($data as $linha => $row): ?>
            <?php $partes = explode(',', $row) ?>
            <tr>
                <!-- <td><?= $linha ?></td> -->
                <td><?= $partes[0] ?></td>
                <td><?= $partes[1] ?></td>
                <td><?= $partes[2] ?></td>
                <td><?= $partes[3] ?></td>
                <td><?= $partes[4] ?></td>
                <td>
                    <a href="delete.php?linha=<?= $linha ?>">Remover</a>
                </td>
            </tr>
        <?php endforeach ?>
    </table>

<style>
    a {
        color: orange;
    }

    table,
    tr,
    td {
        border: 1px solid red;
        border-collapse: collapse;
    }

    tr:nth-child(even) {
        background: cyan;
    }

    td {
        padding: .5em;
    }