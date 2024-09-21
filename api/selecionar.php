<?php
$nome=$_POST['nome'];
$conexao = mysqli_connect('localhost','root','usbw');
mysqli_select_db('biblioteca',$conexao);
$sql="select * from livros where NomeLivro like '$nome'";
$resultado = mysqli_query(mysql: $conexao, query: $sql) or die ("Erro: " . mysqli_error());
while($linha = mysqli_fetch_object($resultado)) {
echo $linha->NomeLivro."#";
echo $linha->Lido."#";
echo $linha->Editora."#";
echo $linha->Autor."#";
}
echo "^";
?>