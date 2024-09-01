<?php

class Livro_class{
    private $pdo;

    public function __construct($dbname, $host, $user, $senha)
    {
        try{
            $this->pdo = new PDO("mysql:dbname=".$dbname. ";host=" .$host, $user, $senha);
        }
        catch (PDOExeption $e){
            echo 'Erro com banco de dados: ' .$e->getMessage();
        }
        catch (exeption $e){
            echo 'Erro genérico: ' .$e->getMessage();
        }
    }


public function enviarLivro($nm_titulo, $nm_editora, $aa_ano_publicacao, $qtd_paginas, $cd_genero, $nm_autor1, $nm_autor2, $nm_autor3, $nm_autor4, $nm_autor5, $nm_status, $fotos = array()){
    //inserir o livro (tabela livro)
    $cmd = $this->pdo->prepare('INSERT INTO tb_livro(nm_titulo, nm_editora, aa_ano_publicacao, qtd_paginas, cd_genero, nm_autor1, nm_autor2, nm_autor3, nm_autor4, nm_autor5, nm_status) values(:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k)');
    $cmd->bindValue(':a', $nm_titulo);
    $cmd->bindValue(':b', $nm_editora);
    $cmd->bindValue(':c', $aa_ano_publicacao);
    $cmd->bindValue(':d', $qtd_paginas);
    $cmd->bindValue(':e', $cd_genero);
    $cmd->bindValue(':f', $nm_autor1);
    $cmd->bindValue(':g', $nm_autor2);
    $cmd->bindValue(':h', $nm_autor3);
    $cmd->bindValue(':i', $nm_autor4);
    $cmd->bindValue(':j', $nm_autor5);
    $cmd->bindValue(':k', $nm_status);
    $cmd->execute();
    
    $cd_livro = $this->pdo->LastInsertId();
    
    //se recebu imagens
    if(count($fotos) > 0){

        for ($i=0; $i < count($fotos); $i++){
            $nome_foto = $fotos[$i];
            //inserir as imagens do produto (tabela imagens)
            $cmd = $this->pdo->prepare('INSERT INTO imagens(nome_imagem, fk_cd_livro) values(:a, :fk)');
            $cmd->bindValue(':a', $nome_foto);
            $cmd->bindValue(':fk', $cd_livro);
            $cmd->execute();
        }
    }   

}

public function buscarLivros()//todos
{
    $cmd = $this->pdo->query('SELECT *,
     (SELECT nome_imagem from imagens where fk_cd_livro = tb_livro.cd_livro LIMIT 1) as foto_capa 
     FROM tb_livro');
     if($cmd->rowCount() > 0)
     {
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
     }
     else{
        $dados = array();
     }
     return $dados;
}

public function buscarLivrosPorId($id){//um
    $cmd = $this->pdo->prepare('SELECT * FROM tb_livro where cd_livro = :id');
    $cmd->bindValue(':id', $id);
    $cmd->execute();
    if($cmd->rowCount() > 0)
    {
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
    }
    else{
        $dados = array();
    }
    return $dados;
}

public function buscarImagemPorId($id){
    $cmd = $this->pdo->prepare('SELECT nome_imagem FROM imagens WHERE fk_cd_livro = :id');
    $cmd->bindValue(":id", $id);
    $cmd->execute();
    if($cmd->rowCount() > 0)
    {
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
    }
    else{
        $dados = array();
    }
    return $dados;
}

}


?>