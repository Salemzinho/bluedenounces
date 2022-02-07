<!DOCTYPE html>
<html lang="PT-BR">

<head>

    <!-- HTML -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueDenounces - Sobre-nós</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Javascript -->
	
</head>

<body>

<canvas id="canvas"></canvas>

<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <div class="container">
      <a class="navbar-brand me-2 mt-1" href="/">
        <h4 id="logo"><b id="logo-blue">Blue</b>Denounces</h4>
      </a> 
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
          <i class="fas fa-bars"></i>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbar">
          <ul class="navbar-nav mr-auto">
            <div class="d-flex">
              <a href="/sobre-nos.php">
                <button type="button" class="btn btn-link px-3 me-2" id="a-sobre-nos">
                  Sobre-nós
                </button>
              </a>
              <a href="https://nubank.com.br/pagar/1590nb/jjMH50j5e0">
                <button type="button" class="btn btn-primary me-3" id="apoie-os-criadores">
                  Apoie os Criadores
                </button>
              </a>
              <a class="btn btn-dark px-3" href="https://github.com/Salemzinho" role="button"><i class="fab fa-github"></i></a>
            </div>
          </ul>
      </div>
  </div>
</nav>

<div class="container">
  <br>
  <div class="text-center mt-5 col-12">
    <div class="row">
      <div class="col-sm-4 mb-5">
        <div class="card border-0" id="sobre-nos-card">
          <div class="card-body">
            <i class="fas fa-balance-scale fa-3x"></i>
            <h5 class="card-title">Nosso Objetivo</h5>
            <p class="card-text">Denuncia sem Burocracia, nosso objetivo é combater a disciminação de pornografia infatil no Twitter sem formularios desencorajadores, não exigimos nada de você, apenas o úsuario e o motivo da sua denuncia.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mb-5">
        <div class="card border-0" id="sobre-nos-card">
          <div class="card-body">
            <i class="fas fa-users fa-3x"></i>
            <h5 class="card-title">Nossa Comunidade</h5>
            <p class="card-text">Nós possuimos uma grande comunidade de denunciadores anonimos que ajudarão você a denunciar o úsuario escolhido, assim, aumentando o alcance de denuncias sobre perfil.</p>
          </div>
        </div>
      </div>
    <div class="col-sm-4 mb-5">
        <div class="card border-0" id="sobre-nos-card">
          <div class="card-body">
            <i class="fas fa-user-minus fa-3x"></i>
            <h5 class="card-title">Nossa Métodologia</h5>
            <p class="card-text">Nós analisamos o perfil do denunciado, caso tenha algum contéudo pornografico infantil, cerca de 10 a 50 denunciadores irão reportar o usuario para o Twitter, assim, apagando o post ou excluido a conta do alvo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
<script src="js/main.js"></script>
</html>



