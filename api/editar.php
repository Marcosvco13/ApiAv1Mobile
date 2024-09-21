<?php
$nomenovo=$_POST['nomenovo'];
$nomevelho=$_POST['nomevelho'];
$autor=$_POST['autor'];
$editora=$_POST['editora'];
$lido=$_POST['lido'];

$conexao = mysqli_connect(hostname: '34.28.254.100',username: 'root',password: 'usbw');
mysqli_select_db(mysql: $conexao, database: 'biblioteca');
$sql = "update livros set NomeLivro='$nomenovo', Autor='$autor', Editora='$editora', Lido='$lido' where NomeLivro='$nomevelho'";

$resultado = mysqli_query(mysql: $conexao, query: $sql) or die ("Erro: " . mysqli_error(mysql: $conexao));

if($resultado)
echo "1";
else
echo "0";
?>