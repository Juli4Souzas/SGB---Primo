<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $cd_livro = $_POST['cd_livro'];
        $nm_titulo = $_POST['nm_titulo'];
        $nm_editora = $_POST['nm_editora'];
        $aa_ano_publicacao = $_POST['aa_ano_publicacao'];
        $qtd_paginas = $_POST['qtd_paginas'];
        $cd_genero = $_POST['cd_genero'];
        $nm_autor1 = $_POST['nm_autor1'];
        $nm_autor2 = $_POST['nm_autor2'];
        $nm_autor3 = $_POST['nm_autor3'];
        $nm_autor4 = $_POST['nm_autor4'];
        $nm_autor5 = $_POST['nm_autor5'];
        $nm_status = $_POST['nm_status'];
        
        $sqlInsert = "UPDATE tb_livro
        SET nm_titulo='$nm_titulo',nm_editora='$nm_editora',aa_ano_publicacao='$aa_ano_publicacao',qtd_paginas='$qtd_paginas',cd_genero='$cd_genero', nm_autor1='$nm_autor1', nm_autor2='$nm_autor2', nm_autor3='$nm_autor3', nm_autor4='$nm_autor4', nm_autor5='$nm_autor5', nm_status='$nm_status' 
        WHERE cd_livro=$cd_livro";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: livros_adm.php');

   
        
        

?>