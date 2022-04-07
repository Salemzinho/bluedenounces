<?php

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
if (isset($_POST['submit'])) {
  $nome = $_POST['input-denuncia']; 
  $motivo = $_POST['motivo'];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = 2;
    $mail->SMTPSecure = "ssl";
    
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = ''; //GMAIL PESSOAL
	$mail->Password = ''; //SENHA GMAIL PESSOAL
	$mail->Port = 465;
 
	$mail->setFrom(''); //GMAIL PESSOAL
	$mail->addAddress(''); //GMAIL PESSOAL
 
	$mail->isHTML(true);
	$mail->Subject = 'BlueDenounces';
	$mail->Body = '<b>@ do Perfil: </b>' . $nome . '<br><br> <b>Motivo da Denuncia: </b>' . $motivo;
	$mail->AltBody = 'BlueDenounces';
 
    $mensagem = '';
    
	if($mail->send()) {
		$mensage = '<br><h5 style="text-align: center; color: #00a2e3;">Denuncia Enviada  <i class="fas fa-check" style="color: #00a2e3;"></i></h5>';
	} else {
		echo '<h5 style="text-align: center; color: #00a2e3;">Email nao enviado.</h5>';
	}
} catch (Exception $e) {
	echo "";
}

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>

    <!-- HTML -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlueDenounces - Juntos no combate à pedofilia</title>

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
  <div class="text-center mt-5 col-12">
  <span class="mt-3">"Art. 241-A. Oferecer, trocar, disponibilizar, transmitir, distribuir, publicar ou divulgar por qualquer meio, inclusive por meio de sistema de informática ou telemático, fotografia, vídeo ou outro registro que contenha cena de sexo explícito ou pornográfica envolvendo criança ou adolescente: (Incluído pela Lei nº 11.829, de 2008)"</span>
    <br><br>
  <i class="fas fa-shield-alt fa-3x" id="imagem-centro"></i>
    <div id="input-denuncia">
      <form method="POST" name="formContato" action="envio.php">
        <?php echo $mensage; ?>
        <input type="hidden" id="meuValor" name="nameValor" />
        <input class="col-sm-7 col-md-7 col-lg-7 col-12" type="text" name="input-denuncia" id="input-principal" placeholder="Digite o @..." required><br>
        <textarea class="col-sm-7 col-md-7 col-lg-7 col-12" id="input-motivo" name="motivo" placeholder="Qual o motivo da denuncia?"required></textarea>
        <br>
        <a href="envio.php"><button type="submit" name="submit" value="Send" id="button-denuncia">Enviar</button></a>
      </form>
    </div>
    <div class="github-apoie col-12"></div>
  </div>
</div>

</body>
<script src="js/main.js"></script>
</html>





