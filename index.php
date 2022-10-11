<!doctype html>
<html lang="en">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="App público para denúncias municipais, estaduais e federais. Denuncie anonimanete! Simples e rápido!">

    <title>Quero Denunciar v1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="heroes.css" rel="stylesheet">
  </head>
  <body>
    
  <main>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4"><b>Quero Denunciar</b></span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Denpuncias</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Ajude</a></li>
      </ul>
    </header>
  </div>
</main>

<div class="b-example-divider"></div>

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
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Ver todas denúncias</button>
        </div>
      </div>
    </div>
  </div>

  <?php 
    include ("config.php");
  ?>


<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">© 2022 Quero denunciar.</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     
  </body>
</html>
