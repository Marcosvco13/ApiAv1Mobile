<?php
$nomenovo=$_POST['nomenovo'];
$nomevelho=$_POST['nomevelho'];
$autor=$_POST['autor'];
$editora=$_POST['editora'];
$lido=$_POST['lido'];

$conexao = mysql_connect('localhost','root','usbw');

mysql_select_db('biblioteca',$conexao);

$sql = "update livros set NomeLivro='$nomenovo', Autor='$autor', Editora='$editora', Lido='$lido' where NomeLivro='$nomevelho'";

$resultado = mysql_query($sql) or die ("Erro .:" . mysql_error());

if($resultado)
echo "1";
else
echo "0";
?>