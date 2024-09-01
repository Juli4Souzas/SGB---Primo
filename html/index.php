
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
    <link rel="stylesheet" href="../css/style.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   

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
                <div id="" class="fas fa-heart"></div>
                <div id="login-btn" class="fas fa-user"></div>
            </div>
        </div>

        <div class="headerr-2">
            <nav class="navbarr">
              <a href="#">Home</a>
              <a href="#sobre">Sobre nós</a>
              <a href="livros.php">Livros</a>
              
          

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
      <!--<div class="login-form-container">

        <div id="#close-login-btn" class="fas fa-times"></div>

        <form action="login.php" method="post">
            <h3>Login</h3>
            <span>Nome de usuário</span>
            <input type="text" name="nm_nome_usuario" placeholder="Digite seu usuário" class="boxx" id="nm_nome_usuario" required>
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
      </div>-->


      <!---->

      <div class="login-form-container">

        <div id="close-login-btnn" class="fas fa-times"></div>

        <form action="login.php" method="post">
            <h3>Login</h3>
            <span>Nome de usuário</span>
            <input type="text" name="nm_nome_usuario" placeholder="Digite seu usuário" class="boxx" id="nm_nome_usuario" required>
            <span>Senha</span>
            <input type="password" name="nm_senha" placeholder="Digite sua senha" class="boxx" id="nm_senha" required>
            <div class="checkboxx">
                <input type="checkbox" name="" id="lembre-me">
                <label for="">Lembre-me</label>
            </div>
            <input type="submit" value="Login" class="btnn">
            <p>Esqueceu a senha? <a href="esqueceu_senha.php">Clique aqui</a></p>
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
        </form>
      </div>


      

      

      <!--CONTEÚDO-->
  <main>
    <div class="container">
      <div class="row">
        <div class="col-12">

          

          <br>

          <!--Carousel-->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="w-100 img-fluid d-md-none" src="../img/slides/banner-mobile/mobile1.png">
                <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="../img/slides/banner-tablet/tablet1.png">
                <img class="w-100 img-fluid d-none d-xl-block" src="../img/slides/banner-desktop/desktop1.png">
              </div>
              <div class="carousel-item">
                
                <img class="w-100 img-fluid d-md-none" src="../img/slides/banner-mobile/22.jpg">
                <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="../img/slides/banner-tablet/22.jpg">
                <img class="w-100 img-fluid d-none d-xl-block" src="../img/slides/banner-desktop/22.png">
                <!--
                <div class="carousel-caption">
                  <h5 class="fs-1">Titulo</h5>
                  <p class="fs-4"> Subtitulo</p>
                </div> -->
              </div>
              <div class="carousel-item">
                <img class="w-100 img-fluid d-md-none" src="../img/slides/banner-mobile/33.jpg">
                <img class="w-100 img-fluid d-none d-md-block d-xl-none" src="../img/slides/banner-tablet/33.jpg">
                <img class="w-100 img-fluid d-none d-xl-block" src="../img/slides/banner-desktop/33.png">
                <!--
                <div class="carousel-caption">
                  <h5 class="fs-1">Titulo</h5>
                  <p class="fs-4"> Subtitulo</p>
                </div> -->
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Próximo</span>
            </button>
          </div>

          <br>


        </div>
      </div> <!--fecha Carousel-->
      <br>

      <h2 class=""> Os mais procurados </h2> <p></p>


      
      



      <div class="livros">
            <div class="mais">
                <!--<label>Mais lidos<a href="#"><i class="uil uil-arrow-to-right seta" style="color: #000000;"></i></a></label>-->
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/1.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/2.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/3.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/4.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/5.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/6.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
                <div class="item">
                  <div class="card">
                    <img src="../img/livros2/7.png" alt="alt-image" class="card-img-top">
                    <div class="card-body text-center">
                      <h5 class="card-title">
                        Titulo do livro
                      </h5>
                      <a href="#" class="btn btn-primary">Sobre</a>
                    </div>
  
                  </div>
                </div>
              </div>
        </div>

        
     
      



      
    
  </main>
  <div class="sobre" id="sobre" style="display:flex; margin-top: 90px; align-items: center;">
        <br><br><br><br><br><br><br>
        <div class="sl" style="margin-left: 10%;">
        <img src="../img/sobre.png" width="70%">
        </div>
        
        <div class="pp" style="font-size: 20px;  text-align: justify; margin-right: 10%;  ">
        <p><br><br><br>Bem-vindo ao nosso universo digital, onde a busca pelo conhecimento é facilitada e a gestão de bibliotecas ganha uma nova dimensão. Somos apaixonados pela educação e pelo poder transformador que os livros e a informação têm em nossas vidas. Apresentamos a você a Quarta Capa, sua plataforma de gerenciamento de bibliotecas online.<br><br><br></p>
        </div>
        

</div><br><br>


  <!--Footer-->
  <!-- Remove the container if you want to extend the Footer to full width. -->


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


<!-- End of .container -->

      




 <!-- javascipt jquery -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- owl carousel min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.mousewheel.min.js"></script>

<!-- owl carousel init -->

<script>
 var owl = $('.owl-carousel');
owl.owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:10,
    nav:true,
   /* responsive:{
      600:{
            items:6
        },
    }*/responsive:{
        0:{
            items:4,
            nav:true
        },
        600:{
            items:4,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            
        }
    }
})


owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } 
    else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});

</script>

    <!-- script -->
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>