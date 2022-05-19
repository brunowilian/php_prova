
<?php
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$fp = fopen('users.csv', 'a');
fwrite($fp, $usuario . ',' . $email . ',' . $senha . PHP_EOL);

header('location: index.php');

?>