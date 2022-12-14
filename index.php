<!-- Gustavo Kennedy Renkel -->
<!doctype html>
<html lang="pt-br">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="App público para denúncias municipais, estaduais e federais. Denuncie anonimanete! Simples e rápido!">

    <title>Quero Denunciar v1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚨</text></svg>">

  </head>
  <body>
  <?php 
    include ("config.php");
  ?>

    
  <main>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4"><b>🚨 Quero Denunciar</b></span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Denúncias</a></li>
        <li class="nav-item"><a href="#sobre" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="#ajude" class="nav-link">Ajude</a></li>
      </ul>
    </header>
  </div>
</main>

<div id="banner" class="b-example-divider"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="bg.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Algo irregular? Denuncie!</h1>
        <p class="lead">O Quero Denunciar foi criado para facilitar o registro de representações em órgãos municipais, estaduais e federais.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="nova-denuncia.php"><button  class="btn btn-primary btn-lg px-4 me-md-2">Criar denúncia</button></a>
          <a href="lista-denuncia.php"><button type="button" class="btn btn-outline-secondary btn-lg px-4">Ver todas denúncias</button></a>
        </div>
      </div>
    </div>
  </div>


  <div id="sobre" class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Sobre Quero Denunciar</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">A Quero Denunciar não possui vinculo com órgãos ou empresas. É um sistema autonomo para registros de denúncias em âmbito nacional, sem nenhum patrocinador. O objetivo do sistema é facilitar as denúncias para todo o país.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="#ajude"><button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Ajude a manter</button></a>
      </div>
    </div>
    <div class="overflow-hidden" style="max-height: 30vh;">
      <div class="container px-5">
        <img src="bg2.png" class="img-fluid mb-4" alt="Example image" width="700" height="600" loading="lazy">
      </div>
    </div>
  </div>


  <div class="container col-xl-10 col-xxl-8 px-4 py-5" id="ajude">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Ajude a manter</h1>
        <p class="col-lg-10 fs-4">As doações são utilizadas para novos recursos e infraestrutura Cloud do sistema. Cada centavo ajuda continuar o projeto Quero Denunciar.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
		<img src="https://bitcoin.org/img/icons/logotop.svg" width="175"><br />
		<br />
		Doe com Bitcoin:<br />
		<b>ENDEREÇO</b>	
          </div>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
  

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">© 2022 Quero denunciar.</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     
  </body>
</html>
