<?php
    $nome=$_POST['nome'];
    
    $conexao = mysqli_connect(hostname: '34.28.254.100',username: 'root',password: 'usbw');
    mysqli_select_db(mysql: $conexao, database: 'biblioteca');
    $sql = "delete from livros where NomeLivro like '$nome' ";
    
    $resultado = mysqli_query(mysql: $conexao, query: $sql) or die ("Erro: " . mysqli_error(mysql: $conexao));
    if($resultado)
    echo "1";
    else
    echo "0";
?>