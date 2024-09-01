<?php

    if(!empty($_GET['cd_emprestimo_livro']))
    {
        include_once('config.php');

        $cd_emprestimo_livro = $_GET['cd_emprestimo_livro'];

        $sqlSelect = "SELECT *  FROM tb_emprestimo_livro WHERE cd_emprestimo_livro=$cd_emprestimo_livro";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_emprestimo_livro WHERE cd_emprestimo_livro=$cd_emprestimo_livro";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: emprestimo.php');
   
?>