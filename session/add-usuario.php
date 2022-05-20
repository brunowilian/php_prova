
<?php
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$linkedin = $_POST['linkedin'];

$fp = fopen('users.csv', 'a');
fwrite($fp, $usuario . ',' . $senha . ',' . $email . ',' . $telefone . ',' . $linkedin . PHP_EOL);

header('location: index.php');

?>