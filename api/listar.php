<?php
$conexao = mysql_connect('localhost','root','usbw');
mysql_select_db('biblioteca',$conexao);
$sql="select * from livros";
$resultado = mysql_query($sql) or die ("Erro: " . mysql_error
());
while($linha = mysql_fetch_object($resultado))
echo $linha->NomeLivro."#";
echo "^";
?>