<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Cursos online com certificado - Vancouver Tec</title>
    <meta charset="utf-8">
    <meta name="author" content="Rafael Ferreira da Silva">
    <meta name="creator" content="Vancouver Tec Soluções em Tecnologia">
    <meta name="description" content="Aqui na Vancouver Tec tem centas de cursos online e com vários alunos inscritos. Aprenda linguagem de programação, php, ia, java, phyton, c#, c++, html, css, bootastrap, flutter, android, ios, windows phone, linux, windows, word, excel, power point, access e muito mais!">
    <meta name="keywords" content="php, phyton, dart, swift, kotlin, android, ios, windows phone, c, c++, java, oracle, sql server, mysql, postgre, maria db, office 365, lua, r, delphi">
    <meta name="google-site-verification" content="L1B_JnzPqLo-hHcsAOrehkVyZM7KDGRpIiaSrtm4TR4">
    <meta property="og: type" content="Portal EAD">
    <meta property="og: title" content="Cursos online de tecnologia, aprenda no seu tempo | Vancouver Tec">
    <meta property="og: description" content="Aqui na sabemais tem centas de cursos online ecom vários alunos inscritos. Aprenda php, ia, java, phyton, c#, c++, html, css, bootastrap, flutter, android, ios, windows phone, linux, windows e muito mais!">
    <meta property="og: image" content="https://cursos.vancouvertec.com.br/assets/img/computador-portatil_64x64.png">
    <meta property="og: url" content="https://cursos.vancouvertec.com.br">
    <meta property="og: site_name" content="Cursos Vancouver Tec">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="template/images/cursos.png" rel="icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="template/css/animate.css">
    <link rel="stylesheet" href="template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/css/magnific-popup.css">
    <link rel="stylesheet" href="template/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="template/css/jquery.timepicker.css">
    <link rel="stylesheet" href="template/css/flaticon.css">
    <link rel="stylesheet" href="template/css/style.css">
  </head>
  <body>
<!-- INICIO nav -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}"><span>Cursos</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="oi oi-menu"></span> Menu
    </button>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">       
        <li class="nav-item active"><a href="{{ url('/curso') }}" class="nav-link">Curso</a></li>
        <li class="nav-item"><a href="{{ url('/site') }}" class="nav-link">Site</a></li>
        <li class="nav-item"><a href="{{ url('/sistema') }}" class="nav-link">Sistema</a></li>
        <li class="nav-item"><a href="{{ url('/app') }}" class="nav-link">App</a></li>
        <li class="nav-item"><a href="{{ url('/lojavirtual') }}" class="nav-link">Loja Virtual</a></li>
        <li class="nav-item"><a href="{{ url('/documento') }}" class="nav-link">Documento</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse">
      <a href="#"><button type="button" class="btn btn-pill btn-light"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button></a>      
    </div>
    <div class="collapse navbar-collapse">
      <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Meu Login</button></a>
    </div>
    <div class="collapse navbar-collapse">
      <a href="{{ route('register') }}"><button type="button" class="btn btn-outline-primary">Cadastre-se</button></a>
    </div>
  </div>
</nav>
<!-- END nav -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('template/images/banner-curso.png');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="fa fa-chevron-right"></i></a></span> <span>Lista de Cursos <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-0 bread">Cursos</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section bg-light">
  <div class="container">
  <div class="row">
    <div class="col-lg-3 sidebar">
      <div class="sidebar-box bg-white ftco-animate">
        <form action="#" class="search-form">
          <div class="form-group">
            <span class="icon fa fa-search"></span>
            <input type="text" class="form-control" placeholder="Search...">
          </div>
        </form>
      </div>
      <div class="sidebar-box bg-white p-4 ftco-animate">
        <h3 class="heading-sidebar">Categoria</h3>
        <form action="#" class="browse-form">
          <label for="option-category-1"><input type="checkbox" id="option-category-1" name="vehicle" value="" checked> Todos</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Linguagem de Programação</label><br>
          <label for="option-category-2"><input type="checkbox" id="option-category-2" name="vehicle" value=""> Front-End</label><br>
          <label for="option-category-3"><input type="checkbox" id="option-category-3" name="vehicle" value=""> Back-End</label><br>
          <label for="option-category-4"><input type="checkbox" id="option-category-4" name="vehicle" value=""> Mobile</label><br>
          <label for="option-category-5"><input type="checkbox" id="option-category-5" name="vehicle" value=""> UX-UI/Design</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Banco de Dados</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> DevOps</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Data Science</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Office</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Sistemas Operacionais</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Marketing Digital</label><br>
          <label for="option-category-6"><input type="checkbox" id="option-category-6" name="vehicle" value=""> Outros</label><br>
        </form>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="row">
        <div class="col-md-6 d-flex align-items-stretch ftco-animate">
          <div class="project-wrap">
            <a href="#" class="img" style="background-image: url(template/images/work-1.jpg);">
            <span class="price">Software</span>
            </a>
            <div class="text p-4">
              <h3><a href="#">Design for the web with adobe photoshop</a></h3>
              <p class="advisor">Advisor <span>Tony Garret</span></p>
              <ul class="d-flex justify-content-between">
                <li><span class="flaticon-shower"></span>2300</li>
                <li class="price">$199</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="ftco-footer ftco-no-pt">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md pt-5">
            <div class="ftco-footer-widget pt-md-5 mb-4">
              <h2 class="ftco-heading-2">Sobre</h2>
              <p>Conheça as nossas redes sociais:</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                <li class="ftco-animate"><a href="https://twitter.com/VancouverTec?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Fwww.vancouvertec.com.br%2F"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/vancouvertec"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/accounts/login/?next=/vancouvertec"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md pt-5">
            <div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Outros</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Carreiras</a></li>
                <li><a href="#" class="py-2 d-block">Trabalhe conosco</a></li>
                <li><a href="#" class="py-2 d-block">Ser Professor</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md pt-5">
            <div class="ftco-footer-widget pt-md-5 mb-4">
              <h2 class="ftco-heading-2">Políticas do site</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Política de privacidade</a></li>
                <li><a href="#" class="py-2 d-block">Termo de uso</a></li>
                <li><a href="#" class="py-2 d-block">Mapa do site</a></li>
                <li><a href="#" class="py-2 d-block">Declaração de acessibilidade</a></li>
                <li><a href="#" class="py-2 d-block">Faq's</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md pt-5">
            <div class="ftco-footer-widget pt-md-5 mb-4">
              <h2 class="ftco-heading-2">Em que podemos ti ajudar?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon fa fa-map-marker"></span><span class="text">Rua Haroldo Cavalcanti, 360 - Recreio - RJ</span></li>
                  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+55 21 98165-1412</span></a></li>
                  <li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">contato@vancouvertec.com.br</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Cursos <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://vancouvertec.com.br" target="_blank">Vancouver Tec</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
      </svg>
    </div>
    <script src="template/js/jquery.min.js"></script>
    <script src="template/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="template/js/popper.min.js"></script>
    <script src="template/js/bootstrap.min.js"></script>
    <script src="template/js/jquery.easing.1.3.js"></script>
    <script src="template/js/jquery.waypoints.min.js"></script>
    <script src="template/js/jquery.stellar.min.js"></script>
    <script src="template/js/owl.carousel.min.js"></script>
    <script src="template/js/jquery.magnific-popup.min.js"></script>
    <script src="template/js/jquery.animateNumber.min.js"></script>
    <script src="template/js/bootstrap-datepicker.js"></script>
    <script src="template/js/scrollax.min.js"></script>      
    <script src="template/js/main.js"></script>
  </body>
</html>

