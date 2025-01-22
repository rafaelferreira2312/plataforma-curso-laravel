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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><span>Cursos</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">            
            <li class="nav-item"><a href="{{ url('/curso') }}" class="nav-link">Curso</a></li>
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
      </div>
    </nav>
    <!-- END nav -->
    <div class="hero-wrap js-fullheight" style="background-image: url('template/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate">
            <span class="subheading">Bem-vindo aos cursos de tecnologia</span>
            <h1 class="mb-4">Uma plataforma de cursos totalmente online. </h1>
            <p class="caps">Aqui você pode ver seus cursos no celular, tablet, tv, notebook ou no desktop.</p>
            <p class="mb-0"><a href="#" class="btn btn-primary">Cursos</a> <a href="#" class="btn btn-white">Sistemas</a></p>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
      <div class="container">
        <div class="row">
          <div class="col-md-7"></div>
          <div class="col-md-5 order-md-last">
            <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Registre-se agora!</h3>
              <form action="#" class="signup-form">
                <div class="form-group">
                  <label class="label" for="name">Nome Completo</label>
                  <input type="text" class="form-control" placeholder="Rafael Silva">
                </div>
                <div class="form-group">
                  <label class="label" for="email">E-mail</label>
                  <input type="text" class="form-control" placeholder="nome@vancouvertec.com.br">
                </div>
                <div class="form-group">
                  <label class="label" for="password">Senha</label>
                  <input id="password-field" type="password" class="form-control" placeholder="Senha">
                </div>
                <div class="form-group">
                  <label class="label" for="password">Confirmar Senha</label>
                  <input id="password-field" type="password" class="form-control" placeholder="Confirmar Senha">
                </div>
                <div class="form-group d-flex justify-content-end mt-4">
                  <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
                </div>
              </form>
              <p class="text-center">Voce ja tem uma conta? <a href="{{ route ('login') }}">Login</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Comece a aprender hoje</span>
            <h2 class="mb-4">conheça as categorias de cursos online</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/linguagem-programacao.jpg);">
              <div class="text w-100 text-center">
                <h3>Linguagem de Programação</h3>
                <span>100 Coursos</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/front-end.jpg);">
              <div class="text w-100 text-center">
                <h3>Front-End</h3>
                <span>100 Cursos</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/back-end.jpg);">
              <div class="text w-100 text-center">
                <h3>Back-End</h3>
                <span>100 Cursos</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/mobile.jpg);">
              <div class="text w-100 text-center">
                <h3>Mobile</h3>
                <span>100 Cursos</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/ux-ui.png);">
              <div class="text w-100 text-center">
                <h3>UX-UI/Design</h3>
                <span>100 Cursos</span>
              </div>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/banco-dados.png);">
              <span class="text w-100 text-center">
                <h3>Banco de Dados</h3>
                <span>100 Cursos</span>
              </span>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/devops.png);">
              <span class="text w-100 text-center">
                <h3>DevOps</h3>
                <span>100 Cursos</span>
              </span>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/data-science.png);">
              <span class="text w-100 text-center">
                <h3>Data Science</h3>
                <span>100 Cursos</span>
              </span>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/office.png);">
              <span class="text w-100 text-center">
                <h3>Office</h3>
                <span>100 Cursos</span>
              </span>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/sistema-operacional.png);">
              <span class="text w-100 text-center">
                <h3>Sistemas Operacionais</h3>
                <span>100 Cursos</span>
              </span>
            </a>
          </div>
          <div class="col-md-3 col-lg-2">
            <a href="#" class="course-category img d-flex align-items-center justify-content-center" style="background-image: url(template/images/work-5.jpg);">
              <div class="text w-100 text-center">
                <h3>Marketing Digital</h3>
                <span>100 Cursos</span>
              </div>
            </a>
          </div>
          <div class="col-md-12 text-center mt-5">
            <a href="#" class="btn btn-secondary">Conheça Todos os Cursos</a>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Que tipo de produto voce precisa?</span>
            <h2 class="mb-4">Produtos adicionados rececente</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(template/images/vtecfacil_2_0.jpg);">
              <span class="price">Software</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Gestão empresarial vtecfácil v.2.0</a></h3>
                <p class="advisor">Autor: <span>Rafael Silva</span></p>
                <ul class="d-flex justify-content-between">
                  <li><span class="flaticon-shower"></span><del>R$ 140,99</del></li>
                  <li class="price"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521981651412">R$ 99,99</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(template/images/conversor_moeda.jpg);">
              <span class="price">Site</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Investimentos, ações e mercado financeiro</a></h3>
                <p class="advisor">Autor: <span>Rafael Silva</span></p>
                <ul class="d-flex justify-content-between">
                  <li><span class="flaticon-shower"></span><del>R$ 69,99</del></li>
                  <li class="price"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521981651412">R$ 49,99</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(template/images/banner-800x533-curso-basico-word-2013.jpg);">
              <span class="price">Curso</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Básico de Word 2013</a></h3>
                <p class="advisor">Autor: <span>Rafael Silva</span></p>
                <ul class="d-flex justify-content-between">
                  <li><span class="flaticon-shower"></span><del>R$ 39,99</del></li>
                  <li class="price"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521981651412">R$ 29,99</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(template/images/documento.png);">
              <span class="price">Documento</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Modelo orçamento para empresa</a></h3>
                <p class="advisor">Autor: <span>Rafael Silva</span></p>
                <ul class="d-flex justify-content-between">
                  <li><span class="flaticon-shower"></span><del>R$ 29,99</del></li>
                  <li class="price"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521981651412">R$ 18,99</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(template/images/documento.png);">
              <span class="price">Documento</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Modelo de ordem de serviço para empresa</a></h3>
                <p class="advisor">Autor: <span>Rafael Silva</span></p>
                <ul class="d-flex justify-content-between">
                  <li><span class="flaticon-shower"></span><del>R$ 29,99</del></li>
                  <li class="price"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521981651412">R$ 19,99</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
              <a href="#" class="img" style="background-image: url(template/images/html5.png);">
              <span class="price">Curso</span>
              </a>
              <div class="text p-4">
                <h3><a href="#">Básico de HTML5</a></h3>
                <p class="advisor">Autor: <span>Rafael Silva</span></p>
                <ul class="d-flex justify-content-between">
                  <li><span class="flaticon-shower"></span><del>R$ 39,99</del></li>
                  <li class="price"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5521981651412">R$ 29,99</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(template/images/bg_4.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex align-items-center">
              <div class="icon"><span class="flaticon-online"></span></div>
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Produtos Online</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex align-items-center">
              <div class="icon"><span class="flaticon-graduated"></span></div>
              <div class="text">
                <strong class="number" data-number="150">0</strong>
                <span>Estudantes Formados</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex align-items-center">
              <div class="icon"><span class="flaticon-instructor"></span></div>
              <div class="text">
                <strong class="number" data-number="1000">0</strong>
                <span>Horas de Curso</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 d-flex align-items-center">
              <div class="icon"><span class="flaticon-tools"></span></div>
              <div class="text">
                <strong class="number" data-number="1500">0</strong>
                <span>Visitas Online</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section ftco-about img">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-12 about-intro">
            <div class="row">
              <div class="col-md-6 d-flex">
                <div class="d-flex about-wrap">
                  <div class="img d-flex align-items-center justify-content-center" style="background-image:url(template/images/about-1.jpg);">
                  </div>
                  <div class="img-2 d-flex align-items-center justify-content-center" style="background-image:url(template/images/about.jpg);">
                  </div>
                </div>
              </div>
              <div class="col-md-6 pl-md-5 py-5">
                <div class="row justify-content-start pb-3">
                  <div class="col-md-12 heading-section ftco-animate">
                    <span class="subheading">De um up nas suas habilidades</span>
                    <h2 class="mb-4">Aprenda tudo o que você quiser hoje!</h2>
                    <p>Quem decide trabalhar com tecnologia precisa ter em mente que essa profissão pede algumas habilidades essenciais e específicas para conseguir o sucesso que tanto sonha. E aqui estamos falando de técnicas de relacionamento ou liderança. Ou seja, é preciso ir além de aplicar os conhecimentos, mas também conhecer o comportamento dos profissionais de tecnologia</p>
                    <P>A área não para de crescer e, com isso, a concorrência aumenta ainda mais. Sendo assim, é importante estar sempre atento para não perder a oportunidade dos sonhos e conseguir se destacar no mercado.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section testimony-section bg-light">
      <div class="overlay" style="background-image: url(template/images/bg_2.jpg);"></div>
      <div class="container">
        <div class="row pb-4">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Pensamentos</span>
            <h2 class="mb-4">Frases dos mais ricos no ramo!</h2>
          </div>
        </div>
      </div>
      <div class="container container-2">
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="star">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </p>
                    <p class="mb-4">"Esse é um momento fantástico para entrar no mundo comercial, principalmente porque os negócios irão mudar ainda mais na próxima década, muito mais do que nos últimos 50 anos."</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(template/images/bill-gates.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Bill Gates</p>
                        <span class="position">Fundador da Microsoft</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="star">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </p>
                    <p class="mb-4">"Eu quero um bom retorno financeiro, mas para mim há outras coisas importantes, como a recompensa de ver a minha criatividade e a minha visão tecnológica darem frutos e mudarem o mundo de maneira positiva."</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(template/images/jeff-bezos.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Jeff Bezos</p>
                        <span class="position">CEO Amazon</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="star">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </p>
                    <p class="mb-4">"Quando algo é importante o suficiente, você realiza, mesmo que as chances não estejam a seu favor. "</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(template/images/elon-musk.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Elon Musk</p>
                        <span class="position">CEO da Tesla Motors e SpaceX</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="star">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </p>
                    <p class="mb-4">"O maior risco é não assumir nenhum risco"</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(template/images/mark-zuckerberg.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Mark Zuckerberg</p>
                        <span class="position">Fundador do Facebook</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="star">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </p>
                    <p class="mb-4">"Empreendedores nunca reclamam, quando as pessoas reclamam a oportunidade surge, e se você conseguir resolver as reclamações esta é a sua oportunidade."</p>
                    <div class="d-flex align-items-center">
                      <div class="user-img" style="background-image: url(template/images/jack-ma.jpg)"></div>
                      <div class="pl-3">
                        <p class="name">Jack Ma</p>
                        <span class="position">Cofundador e presidente executivo do Alibaba</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-intro ftco-section ftco-no-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-12 text-center">
            <div class="img"  style="background-image: url(template/images/bg_4.jpg);">
              <div class="overlay"></div>
              <h2>Aplicativos</h2>
              <p>Voce tambem pode acompanhar tudo pelo aplicativo e so baixar e desfrutar.</p>
              <div class="row justify-content-center">
                <p class="mb-0"><a href="#" class="btn btn-success px-4 py-3"><i class="fa-brands fa-google-play"></i> Google Play</a></p>
                <p class="mb-0"><a href="#" class="btn btn-dark px-4 py-3"><i class="fa-brands fa-app-store-ios"></i> App Store</a></p>
                <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3"><i class="fa-brands fa-microsoft"></i> Microsoft Store</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section services-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-6 heading-section pr-md-5 ftco-animate d-flex align-items-center">
            <div class="w-100 mb-4 mb-md-0">
              <span class="subheading">Por que é importante estudar tecnologia?</span>
              <h2 class="mb-4">A constante evolução da tecnologia na sociedade atual em que vivemos, nos remete a isso todos os dias.</h2>
              <p>O atual modelo de sociedade exige a formação de cidadãos plenos, críticos e conscientes de suas responsabilidades, atuantes no mundo do trabalho com iniciativa, demonstrando atitudes criativas e preparados para propor soluções para resolução dos mais diferentes problemas. Por isso a Vancouver Tec está promovendo:</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                <div class="services">
                  <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tools"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Capacitação</h3>
                    <p>A capacitação de pessoas para o mercado de trabalho.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                <div class="services">
                  <div class="icon icon-2 d-flex align-items-center justify-content-center"><span class="flaticon-instructor"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Metodologias</h3>
                    <p>A criação de uma metodologia de ensino virtual, facilitando o aprendizado.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                <div class="services">
                  <div class="icon icon-3 d-flex align-items-center justify-content-center"><span class="flaticon-quiz"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Prática</h3>
                    <p>Aqui tudo funciona de forma prática.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                <div class="services">
                  <div class="icon icon-4 d-flex align-items-center justify-content-center"><span class="flaticon-browser"></span></div>
                  <div class="media-body">
                    <h3 class="heading mb-3">Certificado</h3>
                    <p>O certificado do curso, para o mercado de trabalho.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <span class="subheading">Sobre o Blog</span>
            <h2 class="mb-4">Posts Recente</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('template/images/blog-python.png');">
              </a>
              <div class="text d-block">
                <div class="meta">
                  <p>
                    <a href="#"><span class="fa fa-calendar mr-2"></span>Setembro. 22, 2021</a>
                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 10</a>
                  </p>
                </div>
                <h3 class="heading"><a href="#">Python</a></h3>
                <p>Python é uma linguagem de programação de alto nível e para propósitos diversos. Ela pode ser utilizada para múltiplas tarefas, desde a análise e visualização de dados até o desenvolvimento, prototipação e automação web...</p>
                <p><a href="https://www.python.org/" class="btn btn-secondary py-2 px-3">Saiba Mais</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('template/images/blog-csharp.png');">
              </a>
              <div class="text d-block">
                <div class="meta">
                  <p>
                    <a href="#"><span class="fa fa-calendar mr-2"></span>Setembro. 22, 2022</a>
                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 15</a>
                  </p>
                </div>
                <h3 class="heading"><a href="#">C#</a></h3>
                <p>C# é uma linguagem de programação orientada a objetos – um modelo que organiza o design de software ao redor de objetos...</p>
                <p><a href="https://learn.microsoft.com/pt-br/dotnet/csharp/" class="btn btn-secondary py-2 px-3">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20" style="background-image: url('template/images/blog-javascript.png');">
              </a>
              <div class="text d-block">
                <div class="meta">
                  <p>
                    <a href="#"><span class="fa fa-calendar mr-2"></span>Setembro. 22, 2022</a>
                    <a href="#"><span class="fa fa-user mr-2"></span>Admin</a>
                    <a href="#" class="meta-chat"><span class="fa fa-comment mr-2"></span> 3</a>
                  </p>
                </div>
                <h3 class="heading"><a href="#">JavaScript</a></h3>
                <p>JavaScript, juntamente com HTML e CSS, é a melhor linguagem de programação para aprender desenvolvimento web front-end. 97,8% de todos os sites no mundo utilizam JavaScript para seu desenvolvimento client-side (a interface que é visível para os visitantes)...</p>
                <p><a href="https://www.javascript.com/" class="btn btn-secondary py-2 px-3">Saiba Mais</a></p>
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
