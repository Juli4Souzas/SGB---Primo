<?php

    if(!empty($_GET['cd_livro']))
    {
        include_once('config.php');

        $cd_livro = $_GET['cd_livro'];

        $sqlSelect = "SELECT *  FROM tb_livro WHERE cd_livro=$cd_livro";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_livro WHERE cd_livro=$cd_livro";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: livros_adm.php');
   
?>