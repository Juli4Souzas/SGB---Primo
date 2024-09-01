<?php
    include_once('config.php');

    if(!empty($_GET['cd_emprestimo_livro']))
    {
        $cd_emprestimo_livro = $_GET['cd_emprestimo_livro'];
        $sqlSelect = "SELECT * FROM tb_emprestimo_livro WHERE cd_emprestimo_livro=$cd_emprestimo_livro";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nm_titulo = $user_data["nm_titulo"];
                $nm_nome_usuario = $user_data["nm_nome_usuario"];
                $dt_data_emprestimo = $user_data["dt_data_emprestimo"];
                
            }
        }
        else
        {
            header('Location: emprstimo.php');
        }
    }
    else
    {
        header('Location: emprestimo.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quarta capa</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Fonte awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/cadastro.css">
    
</head>
<body>

    <!-- Inicio header -->
    <header class="headerr">
        <div class="headerr-1">
            <a href="index.php" class="logoo"><i class="fas fa-book"></i> Quarta capa </a>

            <form action="" class="search-formm">
                <input type="search" name="" placeholder="Pesquise..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="iconss">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-heart"></a>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
        </div>

        <div class="headerr-2">
            <nav class="navbarr">
            <a href="index_logado_adm.php">Home</a>
            <a href="livros_adm.php">Livros</a>
            <a href="emprestimo.php">Empréstimos</a>
            <a href="historico.php">Devoluções</a>
            <a href="usuarios.php">Usuários</a>
              
            </nav>
        </div>
    </header>
    <!-- Final header -->

    <!-- bottom navbar -->
    <nav class="bottom-navbarr">
        <a href="index.php"class="fas fa-home"></a>
        <a href="#sobre" class="fa-solid fa-users"></a>
        <a href="livros.php" class="fa-solid fa-book"></a>
      </nav>

      <!-- fim -->

       <!--login form--> 
      <div class="login-form-container">

<div id="close-login-btnn" class="fas fa-times"></div>

<form action="login.php" method="post">
    <h3>Login</h3>
    <span>Username</span>
    <input type="text" name="nm_nome_usuario" placeholder="Digite seu email" class="boxx" id="nm_nome_usuario" required>
    <span>Senha</span>
    <input type="password" name="nm_senha" placeholder="Digite sua senha" class="boxx" id="nm_senha" required>
    <div class="checkboxx">
        <input type="checkbox" name="" id="lembre-me">
        <label for="">Lembre-me</label>
    </div>
    <input type="submit" value="Login" class="btnn">
    <p>Esqueceu a senha? <a href="#">Clique aqui</a></p>
    <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
</form>
</div>
<!---->

      <!--CONTEÚDO-->
    <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Confirmação de devolução</h3>
            <p class="blue-text">Preencha o formulário abaixo para confirmar a devolução</p>
            <div class="card">
                <h5 class="text-center mb-4">Preencha os campos a seguir</h5>
                <form action="guardar_historico.php" method="post" class="form-card">

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Titulo do livro<span class="text-danger"> *</span></label> 
                            <input type="text" class="input" id="nm_titulo" name="nm_titulo" value="<?php echo $nm_titulo;?>" required> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Usuário<span class="text-danger"> *</span></label> 
                            <input type="text" class="input" id="nm_nome_usuario" name="nm_nome_usuario" maxlength="11" value="<?php echo $nm_nome_usuario;?>" required> 
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Dta do empréstimo<span class="text-danger"> *</span></label> 
                            <input type="text" id="dt_data_emprestimo" name="dt_data_emprestimo" class="input" value="<?php echo $dt_data_emprestimo;?>" required> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                             
                            <input type="hidden" name="cd_emprestimo_livro" value="<?php echo $cd_emprestimo_livro;?>">
                        </div>
                    </div>

                    

                   

                    <div class="bot">
                        <div class="form-group col-sm-6"> 
                        
                        
                <input type="submit" name="update" id="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      

  <!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color:  #000000"
        >
  <!-- Section: Social media -->
  <section
           class="d-flex justify-content-between p-4"
           style="background-color: #464646"
           >
    <!-- Left -->
    <div class="me-5">
      <span>Acesse nossas redes sociais:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="text-white me-4">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold">Quarta Capa</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #464646; height: 2px"
              />
          <p>
           Aqui você vai encontrar informações de contado a respeito da biblioteca virtual, Quarta Capa.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Products</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #464646; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">StarTech</a>
          </p>
          <p>
            <a href="#!" class="text-white">StarTech</a>
          </p>
          <p>
            <a href="#!" class="text-white">StarTech</a>
          </p>
          <p>
            <a href="#!" class="text-white">StarTech</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Outras informações</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #464646; height: 2px"
              />
          <p>
            <a href="#!" class="text-white">Sua Conta</a>
          </p>
          <p>
            <a href="#!" class="text-white">Entre em contato</a>
          </p>
          <p>
            <a href="#!" class="text-white">Políticas do site</a>
          </p>
          <p>
            <a href="#!" class="text-white">Ajuda</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold">Contato</h6>
          <hr
              class="mb-4 mt-0 d-inline-block mx-auto"
              style="width: 60px; background-color: #000000; height: 2px"
              />
          <p><i class="fas fa-home mr-3"></i> Santos, SP 1111-111, BR</p>
          <p><i class="fas fa-envelope mr-3"></i> adm@gmail.com</p>
          <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div
       class="text-center p-3"
       style="background-color: rgba(0, 0, 0, 0.2)"
       >
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/"
       >QuartaCapa.com</a
      >
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

      




    <!-- script -->
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>