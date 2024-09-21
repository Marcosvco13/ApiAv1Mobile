<?php
$nome=$_POST['nome'];
$conexao = mysql_connect('localhost','root','usbw');
mysql_select_db('biblioteca',$conexao);
$sql = "delete from livros where NomeLivro like '$nome' ";
$resultado = mysql_query($sql) or die ("Erro: " . mysql_error());
if($resultado)
echo "1";
else
echo "0";
?>