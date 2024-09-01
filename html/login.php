<!--Criando a conexão com banco de dados-->
<?php
session_start();


$servername="localhost";//onde se localiza o banco de dados
$username="root";//nome do usuario do banco de dados
$password="Primo@123";//nome de usuário do banco de dados
$dbname="db_library";//nome do banco de dados


//Estabelecer a conexão
$conn = new mysqli($servername,$username,$password,$dbname);
//verificar se houve erro de conexão
if($conn->connect_error){
    die("falha na conexão:".$conn->connect_error);
}
//processar o formulário de login
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nm_nome_usuario = $_POST["nm_nome_usuario"];
    $nm_senha = $_POST["nm_senha"];
    

//Consulta no sql para verificar o usuário no banco de dados
$sql="SELECT * FROM tb_usuario  WHERE nm_nome_usuario = '$nm_nome_usuario' AND nm_senha = '$nm_senha'";
$result=$conn->query($sql);


if($result->num_rows ==1){
    if($nm_nome_usuario == "adm" && $nm_senha == "123"){
        header("location:index_logado_adm.php");
    }

    else{
        $_SESSION['nm_nome_usuario']= $nm_nome_usuario;
        $_SESSION['nm_senha']= $nm_senha;
        header("location:index_logado.php");
    }
}

else{
    //login errado
    echo "<script language='javascript' type='text/javascript' align='center'>
 alert('Erro ao efetuar o login. Tente novamente!');
 window.location.replace('index.php'); </script>";

}
$conn->close();
}
//}


?>