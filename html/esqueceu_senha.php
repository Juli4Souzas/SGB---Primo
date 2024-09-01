<?php
include('config.php');

if(isset($_POST['ok'])){

    $nm_email = $mysqli->escape_string($_POST['nm_email']);

    if(!filter_var($nm_email, FILTER_VALIDATE_EMAIL)){
        $erro[] = "Email inválido.";
    }

    $sql_code = "SELECT nm_senha, codigo FROM tb_usuario WHERE nm_email = '$nm_email'";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;

    if($total == 0){
        $erro[] = "O e-mail informado não existe no banco de dados.";
    }
    

    if(count($erro) == 0 && $total>0){
        $novasenha = substr(md5(time()), 0, 6);
        $nscriptografada = md5(md5($novasenha));

        if(mail($nm_email, "Sua nova senha", "Sua nova senha: ".$novasenha)){
            $sql_code = "UPDATE tb_usuario SET nm_senha = '$nscriptografada' WHERE nm_email = '$nm_email'";
            $sql_query= $mysqli->query($sql_code) or die($mysqli->error);

            if($sql_query)
            $erro[] = "Senha Alterada com Sucesso";
        }
    }

    
    
}

//echo substr(md5(time()), 0, 6);





?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //if(count($erro) > 0)
    //if(count($erro) > 0) 
     //foreach($erro as $msg){
        //echo"<p>$msg</p>";
    ///}
    ?>
    <form method="POST" action="">
        <input placeholder="Seu e-mail" name="email" type="text">
        <input value="<?php echo $_POST['nm_email'];?>"
        name="ok" value="ok" type="submit" >
    </form>
</body>
</html>

