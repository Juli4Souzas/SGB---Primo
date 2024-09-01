<?php

    if(!empty($_GET['cd_emprestimo_historico']))
    {
        include_once('config.php');

        $cd_emprestimo_historico = $_GET['cd_emprestimo_historico'];

        $sqlSelect = "SELECT *  FROM tb_emprestimo_historico WHERE cd_emprestimo_historico=$cd_emprestimo_historico";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM tb_emprestimo_historico WHERE cd_emprestimo_historico=$cd_emprestimo_historico";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: historico.php');
   
?>