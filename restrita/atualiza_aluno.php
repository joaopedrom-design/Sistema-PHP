<?php

$ra= $_GET['ra'];
// echo "$ra<br>";

$nome= $_POST['nome'];
$email= $_POST['email'];
$dataNascimento= $_POST['nascimento'];
$telefone= $_POST['telefone'];

//echo "$nome<br>";
//echo "$email<br>";
//echo "$dataNascimento<br>";
//echo "$telefone<br>";

$consulta = $conexao -> prepare ("UPDATE aluno SET
nome ='$nome',
email ='$email',
dataNascimento = '$dataNascimento',
telefone = '$telefone'

 WHERE ra ='$ra'");

$consulta -> execute();

header('Location: index.php');
?>