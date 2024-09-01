<?php
session_start();
//pegar as informações do formulário

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    

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
    $nm_titulo = $_POST["nm_titulo"];
    $nm_nome_usuario = $_POST["nm_nome_usuario"];
    $dt_data_emprestimo = $_POST["dt_data_emprestimo"];


    $sql = "INSERT INTO tb_emprestimo_historico(nm_titulo, nm_nome_usuario, dt_data_emprestimo) 
    values ('$nm_titulo','$nm_nome_usuario', '$dt_data_emprestimo')";
    

    if($conn->query($sql)===TRUE){
        $_SESSION['nm_titulo']= $nm_titulo;
        $_SESSION['nm_nome_usuario']= $nm_nome_usuario;
        $_SESSION['dt_data_emprestimo']= $dt_data_emprestimo;

        
        
        echo"<script> alert ('Devolução realizada com sucesso');
        window.location.href = 'emprestimo.php';</script>";
        /*require 'delete3.php';*/
    }else{
        echo"<script> alert ('Erro na devoução. Tente novamnte: ".$conexao->error.");window.location.href = 
        'emprestimo.php';</script>";
    }
    $conn-close();





}

?>