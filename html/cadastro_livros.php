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

    <link rel="icon" href="../img/log.png">

    
</head>
<body>



    <!-- Inicio header -->
    <header class="headerr">
        <div class="headerr-1">
            <a href="#" class="logoo"><i class="fas fa-book"></i> Quarta capa </a>

            <form action="" class="search-formm">
                <input type="search" name="" placeholder="Pesquise..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>


          

            <div class="iconss">
                <div id="search-btn" class="fas fa-search"></div>
                <A href=#>ADM</A>
                <a href="index.php" class="fa-solid fa-arrow-right-from-bracket"></a>
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
        <a href="index_logado_adm.php"class="fas fa-home"></a>
        <a href="#sobre" class="fa-solid fa-users"></a>
        <a href="livros_adm.php" class="fa-solid fa-book"></a><!--  -->
        <a href="cadastro_livros.php" class="fa-solid fa-book"></a>
        <a href="alunos.php" class="fa-solid fa-book"></a>
      </nav>
<!---->

      <!--CONTEÚDO-->
    <div class="container-fluid px-1 py-5 mx-auto">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
            <h3>Cadastro de livros</h3>
            <p class="blue-text">Cadastre os livros no formulário abaixo</p>
            <div class="card">
                <h5 class="text-center mb-4">Preencha os campos a seguir</h5>
                <form method="POST" enctype="multipart/form-data" class="form-card">

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Titulo do livro<span class="text-danger"> *</span></label> 
                            <input type="text" class="input" id="nm_titulo" name="nm_titulo" required> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Editora<span class="text-danger"> *</span></label> 
                            <input type="text" class="input" id="nm_editora" name="nm_editora" required> 
                        </div>


                        
                    </div>

                    <div class="row justify-content-between text-left">

                    <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Ano de publicação<span class="text-danger"> *</span></label> 
                            <input type="text" id="aa_ano_publicacao" name="aa_ano_publicacao" class="input" required> 
                        </div>
                        

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Quantidade de páginas<span class="text-danger"> *</span></label> 
                            <input type="TEXT" id="qtd_paginas" name="qtd_paginas" class="input" required> 
                        </div>
                    </div>

                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Status<span class="text-danger"> *</span></label> 
                            <input type="text" id="nm_status" name="nm_status" class="input" required> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Genero<span class="text-danger"> *</span></label> 
                            <input type="text" id="cd_genero" name="cd_genero" class="input" required> 
                        </div>
                        
                    </div>

                    
                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Autor 1<span class="text-danger"> *</span></label> 
                            <input type="text" id="nm_autor1" name="nm_autor1" class="input" required> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Autor 2</label> 
                            <input type="text" id="nm_autor2" name="nm_autor2" class="input"> 
                        </div>
                        
                    </div>

                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Autor 3</label> 
                            <input type="text" id="nm_autor3" name="nm_autor3" class="input"> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Autor 4</label> 
                            <input type="text" id="nm_autor4" name="nm_autor4" class="input"> 
                        </div>
                        
                    </div>

                    <div class="row justify-content-between text-left">
                    <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Autor 5</label> 
                            <input type="text" id="nm_autor5" name="nm_autor5" class="input"> 
                        </div>

                        <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Adicione a capa do livro</label> 
                            <input type="file" name="foto[]" multiple id="foto">
                        </div>

                        
		               

                        
                        
                    </div>

                    

                    

                   

                    <div class="bot">
                        <div class="form-group col-sm-6"> 
                            <button type="submit" class="btn-block btn-primary" id="botao">Cadastrar</button> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br>
      

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

<?php

if (isset($_POST['nm_titulo']))
{
    $nm_titulo = addslashes($_POST['nm_titulo']);
    $nm_editora = addslashes($_POST['nm_editora']);
    $aa_ano_publicacao = addslashes($_POST['aa_ano_publicacao']);
    $qtd_paginas = addslashes($_POST['qtd_paginas']);
    $cd_genero = addslashes($_POST['cd_genero']);
    $nm_autor1 = addslashes($_POST['nm_autor1']);
    $nm_autor2 = addslashes($_POST['nm_autor2']);
    $nm_autor3 = addslashes($_POST['nm_autor3']);
    $nm_autor4= addslashes($_POST['nm_autor4']);
    $nm_autor5 = addslashes($_POST['nm_autor5']);
    $nm_status = addslashes($_POST['nm_status']);
    $fotos = array();
    if(isset($_FILES['foto']))
    {
        for ($i=0; $i<count($_FILES['foto']['name']); $i++)
        {
            //salvando dentro da pasta imagens
            $nome_arquivo = md5($_FILES['foto']['name'][$i].rand(1,999)).'jpg'; 
            move_uploaded_file($_FILES['foto']['tmp_name'][$i], '../imagens/'.$nome_arquivo);
            //salvar nomes para enviar para o banco de dados
            array_push($fotos, $nome_arquivo);
        }
    }

    //verificar se foi preenchido todos os campos
    if(!empty($nm_titulo) && !empty($nm_autor1))
    {
		require '../classes/Livro_class.php';
		$p = new Livro_class('db_library', 'localhost', 'root', 'Primo@123');
		$p->enviarLivro($nm_titulo, $nm_editora, $aa_ano_publicacao, $qtd_paginas, $cd_genero, $nm_autor1, $nm_autor2, $nm_autor3, $nm_autor4, $nm_autor5, $nm_status, $fotos);
        echo"<script> alert ('Cadastro realizado com sucesso');window.location.href = 
        'livros_adm.php';</script>";
		
		
		
	}
    
    else
	{
		?>
		<script type="text/javascript">
			alert('Preencha os campos obrigatórios!');
		</script>
		<?php
	}
}

?>