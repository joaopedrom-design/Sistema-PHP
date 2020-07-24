<?php

include'../conecta.php';

$titulo = $_POST['titulo'] ;
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$paginas = $_POST['paginas'];
$exemplares = $_POST['exemplares'];
$genero = $_POST['select'];


$consulta= $conexao -> prepare("INSERT INTO livro (genero,editora,pages,exemplares,autor,titulo) VALUES('$genero','$editora','$paginas','$exemplares','$autor','$titulo')");

$consulta -> execute();

header('Location: index.php');