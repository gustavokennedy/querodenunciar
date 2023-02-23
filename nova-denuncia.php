<!doctype html>
<html lang="pt-br">
  <head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="description" content="App público para denúncias municipais, estaduais, federais e particulares. Denuncie anonimanete! Simples e rápido!">

    <title>Quero Denunciar v1.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🚨</text></svg>">

  </head>
  <body>
    
  <main>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4"><b>🚨 Quero Denunciar</b></span>
      </a>

      <ul class="nav nav-pills">
	      <li class="nav-item"><a href="#" active class="nav-link">Criar denúncia</a></li>
	      <li class="nav-item"><a href="lista-denuncia.php" class="nav-link " aria-current="page">Ver Denúncias</a></li>
        <li class="nav-item"><a href="../" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="../" class="nav-link">Ajude</a></li>
      </ul>
    </header>
  </div>
</main>

  <?php 
    include ("config.php");
  ?>


<div class="container-sm">
  <h1 class="modal-title fs-5">Criar Denúncia</h1>
  <p>Para registrar sua denúncia, informe os campos abaixo:</p>

  <form action="salvar.php" method="POST">
    
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Denúncia Anônima
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Denúncia padrão
  </label>
</div>
      <br>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado*</label>
                <input required type="text" class="form-control" id="estado" name="estado" aria-describedby="estado">
            </div>
            <div class="mb-3">
                <label for="municipio" class="form-label">Municpio*</label>
                <input required type="text" class="form-control" id="municipio" name="municipio" aria-describedby="municipio">
            </div>
            <div class="mb-3">
                <label for="pessoas" class="form-label">Pessoas envolvidas*</label>
                <input required type="text" class="form-control" id="pessoas" name="pessoas" aria-describedby="pessoas">
            </div>
            <div class="mb-3">
                <label for="testemunhas" class="form-label">Testemunhas*</label>
                <input required type="text" class="form-control" id="testemunhas" name="testemunhas" aria-describedby="testemunhas">
    </div>
            <div class="mb-3">
                <label for="endereco" class="form-label">Endereço do fato*</label>
                <input required type="text" class="form-control" id="endereco" name="endereco" aria-describedby="endereco">
            </div>
            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição*</label>
                <input required type="text" class="form-control" id="descricao" name="descricao" aria-describedby="descricao">
            </div>
       
      </div>
      <div class="modal-footer flex-column border-top-0">
        <button type="submit" class="btn btn-lg btn-primary w-50 mx-0 mb-2">Enviar</button>
      </div>
      <br />
</form>
</div>

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">© 2023 Quero denunciar.</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     
  </body>
</html>
