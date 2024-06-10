<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/livro.png">
  <title>
    Leitor
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">

  <!-- Sign-up -->
 <div id="cadastro">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('assets/img/cadastrar.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Bem-vindo!</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">

            <div class="card-body">
              <form role="form">
                <div class="mb-3">
                  <input id="nome" type="text" class="form-control" placeholder="Nome" aria-label="Nome">
                </div>
                <div class="mb-3">
                  <input id="email" type="email" class="form-control" placeholder="Email" aria-label="Email">
                </div>
                <div class="mb-3">
                  <input id="contato" type="tel" class="form-control" placeholder="Contato" aria-label="Contato">
                </div>
                <div class="mb-3">
                  <input id="senha" type="password" class="form-control" placeholder="Senha" aria-label="Senha">
                </div>
                <div class="form-check form-check-info text-start">
                  <input required class="form-check-input" id="concordo" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Concordo com os<a href="javascript:;" class="text-dark font-weight-bolder"> Termos e condições</a>
                  </label>
                </div>
                <div class="text-center">
                  <button id="cad" type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Cadastrar</button>
                </div>
                <p class="text-sm mt-3 mb-0">Já tem uma conta? <a href="sign-in.php" class="text-dark font-weight-bolder">Entrar</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </div>


<!-- Sign-in -->
<div id="entrar">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Entrar</h4>
                </div>
                <div class="card-body">
                  <form role="form">
                    <div class="mb-3">
                      <input id="emailcheck" type="email" class="form-control form-control-lg" placeholder="Email" aria-label="Email">
                    </div>
                    <div class="mb-3">
                      <input id="senhacheck" type="password" class="form-control form-control-lg" placeholder="Senha" aria-label="Senha">
                    </div>

                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Entrar</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Não tem uma conta?
                    <a href="sign-up.php" class="text-primary text-gradient font-weight-bold">Cadastrar</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('assets/img/livros.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
           
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>


<!-- Entrou-->
<div id="entrou">
<div id="imagem" style="background-image: url('assets/img/livros.jpg');
          background-size: cover; background-color: brown;" class="min-height-300 position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
    
      <a class="navbar-brand m-0 text-center mt-3" href="#">
        <span class="ms-1 font-weight-bold">Leitor</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">     
        
      <li class="nav-item">
          <a class="nav-link " href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-primary text-sm opacity-10"></i>
            </div>
            <span id="livros" class="nav-link-text ms-1">Página Inicial</span>
          </a>
        </li>

      <li class="nav-item" style="display:flex;">
          <button  style="border:none; background-color:white;" class="nav-link " type="submit" id="meus">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-collection text-primary text-sm opacity-10"></i>
            </div>
            <span id="livros" class="nav-link-text ms-1">Meus Livros</span>
</button>
        </li>


        
        <li class="nav-item">
          <a class="nav-link " href="livros.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-align-left-2 text-primary text-sm opacity-10"></i>
            </div>
            <span id="livros" class="nav-link-text ms-1">Livros Disponiveis</span>
          </a>
        </li>
     
        <li class="nav-item">
          <a class="nav-link " href="requerimentos.php??id=">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni  ni-collection ni-single-copy-04 text-primary text-sm opacity-10"></i>
            </div>
            <span id="livros" class="nav-link-text ms-1">Meus Requerimentos</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="emprestados.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-copy-04  text-primary text-sm opacity-10"></i>
            </div>
            <span id="livros" class="nav-link-text ms-1">Livros Emprestados</span>
          </a>
        </li>

   

      </ul>
 </div>

  </aside>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Páginas</a></li>
            <li id="pg" class="breadcrumb-item text-sm text-white active" aria-current="page">Página Inicial</li>
          </ol>
          <h6 id="pg" class="font-weight-bolder text-white mb-0">Página Inicial</h6>
          </li>
      </ul>
    </div>
  </div>
</nav>
            </div>
       </main>


       <div id="sistema" class="container mt-10">
  <div class="row">
<div class="table-responsive">
  <div class="col-md-30 mb-5">
    <div class="card shadow-lg" >
    <div class="card-body text-lg-start text-center pt-0">
<h1 class="mt-5 text-center" >Seja Bem-Vindo!</h1>
<p class="mt-3 text-center">Sistema de visualização e requerimento de livros.</p>
</div>
</div>
</div>
</div>
</div>
</div>

</div>

<!-- Livros Emprestados -->
<div id="emprestados" class="card">
  <div class="table-responsive">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ISBN</th>
          <th class="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7 ps-2">Título</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Categoria</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Data de Publicação</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Autor</th>
          <th class="text-center text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">Data Devolução</th>
        </tr>
      </thead>

      <tbody id="emprestados">
     
      </tbody>


    </table>
  </div>
</div>


  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
   

  <script src="inserts/js/cadastroLeitor.js"></script>
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
</body>

</html>