<?php
$nome=$_POST['nome'];

$conexao = mysqli_connect(hostname: '34.28.254.100',username: 'root',password: 'usbw');
mysqli_select_db(mysql: $conexao, database: 'biblioteca');
$sql="select * from livros where NomeLivro like '$nome'";

$resultado = mysqli_query(mysql: $conexao, query: $sql) or die ("Erro: " . mysqli_error(mysql: $conexao));

while($linha = mysqli_fetch_object($resultado)) {
echo $linha->NomeLivro."#";
echo $linha->Lido."#";
echo $linha->Editora."#";
echo $linha->Autor."#";
}
echo "^";
?>