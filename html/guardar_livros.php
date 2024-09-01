<?php
//pegar as informações do formulário

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nm_titulo = $_POST["nm_titulo"];
    $nm_editora = $_POST["nm_editora"];
    $aa_ano_publicacao = $_POST["aa_ano_publicacao"];
    $qtd_paginas = $_POST["qtd_paginas"];
    $qtd_dias_emprestimo = $_POST["qtd_dias_emprestimo"];
    $cd_genero = $_POST["cd_genero"];
    $nm_autor1 = $_POST["nm_autor1"];
    $nm_autor2 = $_POST["nm_autor2"];
    $nm_autor3 = $_POST["nm_autor3"];
    $nm_autor4 = $_POST["nm_autor4"];
    $nm_autor5 = $_POST["nm_autor5"];

    //informações do banco de dados
    $servername="localhost";//onde se localiza o banco de dados
    $username="root";//nome do usuario do banco de dados
    $password="Primo@123";//nome de usuário do banco de dados
    $dbname="db_library";//nome do banco de dados

    //criar uma conexao com o banco de dados
    $conn = new mysqli($servername,$username, $password,$dbname );
    //caso de erro a propriedade connect_erro mostra a descrição
    if($conn->connect_error){
        die("Erro no cadastro: ".$conn->connect_error);
    } 
    //comando em MSQL para salvar as informações do formulário para o BD

    $sql = "INSERT INTO tb_livro(nm_titulo, nm_editora, aa_ano_publicacao, qtd_paginas, qtd_dias_emprestimo, cd_genero, nm_autor1, nm_autor2, nm_autor3, nm_autor4, nm_autor5) 
    values ('$nm_titulo','$nm_editora','$aa_ano_publicacao','$qtd_paginas', '$qtd_dias_emprestimo', '$cd_genero', '$nm_autor1', '$nm_autor2', '$nm_autor3', '$nm_autor4', '$nm_autor5')";

    if($conn->query($sql)===TRUE){
        echo"<script> alert ('Cadastro realizado com sucesso');window.location.href = 
        'cadastro_livros.php';</script>";
    }else{
        echo"<script> alert ('Erro ao cadastrar livro. Tente novamnte: ".$conexao->error.");window.location.href = 
        'cadastro_livros.php';</script>";
    }
    $conn-close();





}

?>