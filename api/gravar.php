<?php
    $nome =$_POST['nome'];
    $lido =$_POST['lido'];
    $editora =$_POST['editora'];
    $autor= $_POST['autor'];
    
    $conexao = mysqli_connect(hostname: '34.28.254.100',username: 'root',password: 'usbw');
    mysqli_select_db(mysql: $conexao, database: 'biblioteca');
    $sql = "insert into livros (NomeLivro, Editora, Autor, Lido) values ('$nome','$editora','$autor','$lido')";
    
    $resposta = mysqli_query(mysql: $conexao, query: $sql) or die ("Erro: " . mysqli_error(mysql: $conexao));
    if($resposta)
    echo "1";
    else
    echo "0";
?>