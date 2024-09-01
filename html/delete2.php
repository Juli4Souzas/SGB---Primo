<?php

    if(!empty($_GET['cd_usuario']))
    {
        include_once('config.php');

        $cd_usuario = $_GET['cd_usuario'];

        $sqlSelect = "SELECT *  FROM tb_usuario WHERE cd_usuario=$cd_usuario";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_usuario WHERE cd_usuario=$cd_usuario";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: usuarios.php');
   
?>