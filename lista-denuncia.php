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
    
  <main>
  <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <span class="fs-4"><b>🚨 Quero Denunciar</b></span>
      </a>

      <ul class="nav nav-pills">
	      <li class="nav-item"><a href="#" class="nav-link">Criar denúncia</a></li>
	      <li class="nav-item"><a href="lista-denuncia.php" class="nav-link active">Ver Denúncias</a></li>
        <li class="nav-item"><a href="../" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="../" class="nav-link">Ajude</a></li>
      </ul>
    </header>
  </div>
</main>

<div class="container-sm">
<div class="table-responsive-sm">
  <table class="table table-hover table-borderless table-sm">
    <thead class='table-light'>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Estado</th>
        <th scope="col">Município</th>
        <th scope="col">Pessoas envolvidas</th>
        <th scope="col">Testemunhas</th>
        <th scope="col">Endereço</th>
        <th scope="col">Descrição</th>
        <th scope="col">Data de criação</th>
      </tr>
    </thead>
  <?php 
    include ("config.php");

    $sql = "SELECT * FROM representacao";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
      while($row = $res->fetch_object()){
        print "<tr>";
            print "<th scope='row'>".$row->id;
            print "<td>".$row->estado;
            print "<td>".$row->municipio;
            print "<td>".$row->pessoas;
            print "<td>".$row->testemunhas;
            print "<td>".$row->endereco;
            print "<td>".$row->descricao;
            print "<td>".$row->data_criacao;
        print "</tr>";
      }
    }else {
      print "<p class='alert alert-danger'>Nenhuma denúncia encontrada</p>";
    }
  ?>
  </table>
</div>
  </div>


<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">© 2023 Quero denunciar.</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     
  </body>
</html>
