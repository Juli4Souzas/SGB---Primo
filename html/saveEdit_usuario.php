<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $cd_usuario = $_POST['cd_usuario'];
        $nm_nome = $_POST["nm_nome"];
        $tel_telefone = $_POST["tel_telefone"];
        $nm_email = $_POST["nm_email"];
        $nm_senha = $_POST["nm_senha"];
        $nm_nome_usuario = $_POST["nm_nome_usuario"];
        
        $sqlInsert = "UPDATE tb_usuario 
        SET nm_nome='$nm_nome',tel_telefone='$tel_telefone',nm_email='$nm_email',nm_nome_usuario='$nm_nome_usuario',nm_senha='$nm_senha' 
        WHERE cd_usuario=$cd_usuario";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: usuarios.php');

?>