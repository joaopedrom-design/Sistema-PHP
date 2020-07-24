<?php

include'../conecta.php';

$nome = $_POST['nome'];
$email= $_POST['email'];
$telefone= $_POST['telefone'];
// $celular= $_POST['celular'];
$nascimento = $_POST['nascimento'];
$turma= $_POST['select'];


$consulta = $conexao -> prepare("INSERT INTO aluno (email,dataNascimento,turma,telefone,nome) VALUES('$email','$nascimento','$turma','$telefone','$nome') ");

$consulta -> execute();

header('Location: index.php');

?>