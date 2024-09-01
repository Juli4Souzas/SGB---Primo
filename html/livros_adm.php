<?php
include_once('config.php');
if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM tb_livro WHERE 
        cd_livro LIKE '%$data%' or
        nm_titulo LIKE '%$data%' or 
        nm_editora LIKE '%$data%' or  
        cd_genero LIKE '%$data%' or 
        nm_autor1 LIKE '%$data%' ORDER BY cd_livro DESC";
    }
    else
    {
        $sql = "SELECT * FROM tb_livro ORDER BY cd_livro DESC";
    }
    $result = $conexao->query($sql);
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
    <link rel="stylesheet" href="../css/livrosadm.css">

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
                <a href="#" class="fas fa-heart"></a>
                <a href="#">ADM</a>
                <a href="index.php" class="fa-solid fa-arrow-right-from-bracket"></a>
            </div>
        </div>

        <div class="headerr-2">
            <nav class="navbarr">
            <nav class="navbarr">
            <a href="index_logado_adm.php">Home</a>
            <a href="#sobre">Sobre nós</a>
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
        <a href="usuarios.php" class="fa-solid fa-book"></a>
      </nav>

      <!-- fim -->

    


      <!---->

      <!--CONTEÚDO-->
  <br><br><br>

 

  <div class="container">
  <h3>Livros</h3><hr>
    <div class="cima">
    <a href="cadastro_livros.php"><button type="button" class="btn btn-dark adicionar">Adicionar livro</button></a>
   

<div class="box-search"><br>
      <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
      <button onclick="searchData()" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
      </button>
  </div>
  
    </div>

  <br>


      <table class="table table-hover ">
      <thead class="table-dark">
        <tr >
          <th scope="col">ID</th>
          <th scope="col">Título</th>
          <th scope="col">Editora</th>
          <th scope="col">Ano de publicação</th>
          <th scope="col">N° de Páginas</th>
          <th scope="col">Gênero</th>
          <th scope="col">Autor 1</th>
          <!--<th scope="col">Autor 2</th>
          <th scope="col">Autor 3</th>
          <th scope="col">Autor 4</th>
          <th scope="col">Autor 5</th>-->
          <th scope="col">Status</th>
          <th scope="col">...</th>
        </tr>
      </thead>
      <tbody  class="">
        <?php
          while($user_data = mysqli_fetch_assoc($result))
          {
            echo "<tr>";
            echo "<td>".$user_data['cd_livro']."</td>";
            echo "<td>".$user_data['nm_titulo']."</td>";
            echo "<td>".$user_data['nm_editora']."</td>";
            echo "<td>".$user_data['aa_ano_publicacao']."</td>";
            echo "<td>".$user_data['qtd_paginas']."</td>";
            echo "<td>".$user_data['cd_genero']."</td>";
            echo "<td>".$user_data['nm_autor1']."</td>";
            //echo "<td>".$user_data['nm_autor2']."</td>";
            //echo "<td>".$user_data['nm_autor3']."</td>";
            //echo "<td>".$user_data['nm_autor4']."</td>";
            //echo "<td>".$user_data['nm_autor5']."</td>";
            echo "<td>".$user_data['nm_status']."</td>";
            echo "<td>
               <a class='btn btn-sm btn-primary' href='edit_livro.php?cd_livro=$user_data[cd_livro]'>
               <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z' />
                </svg>
                </a>
                <a class='btn btn-sm btn-danger' href='delete.php?cd_livro=$user_data[cd_livro]' title='Deletar'>
                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
</svg>
                </a>
            </td>";
          } 
        ?>
      </tbody>
    </table>
  </div>
  <br><BR><BR><BR><BR><br><BR><BR>


  <!-- Footer -->
<footer
        class="text-center text-lg-start text-white"
        style="background-color:  #000000; font-size:70%;"
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
  
  
</body>
<script>
  var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event) {
    if (event.key === "Enter") 
    {
        searchData();
    }
});

function searchData()
{
    window.location = 'livros_adm.php?search='+search.value;
}
</script>
</html>
