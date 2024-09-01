<?php
session_start();
//pegar as informações do formulário

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $nm_nome = $_POST["nm_nome"];
    $tel_telefone = $_POST["tel_telefone"];
    $nm_email = $_POST["nm_email"];
    $nm_senha = $_POST["nm_senha"];
    $nm_nome_usuario = $_POST["nm_nome_usuario"];

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

    $sql = "INSERT INTO tb_usuario(nm_nome, tel_telefone, nm_email, nm_nome_usuario, nm_senha) 
    values ('$nm_nome','$tel_telefone','$nm_email', '$nm_nome_usuario', '$nm_senha')";

    if($conn->query($sql)===TRUE){
        $_SESSION['nm_nome_usuario']= $nm_nome_usuario;
        $_SESSION['nm_senha']= $nm_senha;
        echo"<script> alert ('Cadastro realizado com sucesso');window.location.href = 
        'index_logado.php';</script>";
    }else{
        echo"<script> alert ('Erro ao cadastrar. Tente novamnte: ".$conexao->error.");window.location.href = 
        'Cadastro.php';</script>";
    }
    $conn-close();





}

?>