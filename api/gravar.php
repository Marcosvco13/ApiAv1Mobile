<?php
$nome =$_POST['nome'];
$lido =$_POST['lido'];
$editora =$_POST['editora'];
$autor= $_POST['autor'];
$conexao = mysql_connect('localhost','root','usbw');
mysql_select_db('biblioteca',$conexao);
$sql = "insert into livros (NomeLivro, Editora, Autor, Lido) values ('$nome','$editora','$autor','$lido')";
$resposta = mysql_query($sql) or die ("Erro: " . mysql_error(
));
if($resposta)
echo "1";
else
echo "0";
?>