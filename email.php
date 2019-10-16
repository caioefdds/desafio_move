<!DOCTYPE html>
<html>
<head>
	<title>E-mail</title>
  <meta charset="utf-8">
<?php session_start(); ?>
	<!-- Inclusão CSS -->
  	<link href="css/estilo.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body style="margin: 0;">
	<div style="background-color: #00052c" style="padding: 20px 0px 20px 0px"><center><br><img src="img/logo.svg"><br><br></center></div>
	<div style="background-image: url('img/background2.jpg'); height: 700px;">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center">
        <div class="col-lg-12 align-self-end">
          <h5 class="text-white">O QUE NÓS FAZEMOS?</h5>
          <span class="font-weight-bold" style="color: #e48300; font-size: 120px; font-family: Century Gothic">Tansformação</span>
          <span class="font-weight-bold" style="color: #e48300; font-size: 120px; font-family: Century Gothic">Digital</span><br>
          <span class="text-white font-weight-bold" style="font-size: 40px; font-family: Century Gothic">NÓS CONSTRUIMOS BONS NEGÓCIOS</span><br>
        </div>
        <div class="col-lg-8 align-self-baseline">
        </div>
      </div>
    </div>
  </div>
      <div class="row" style="margin: 0">
        <div class="col-lg-4" style="padding: 200px 50px 0px 80px">
          <span class="font-weight-bold" style="color: #fe0028; font-size: 40px; font-family: Century Gothic">NÓS CONSTRUIMOS BONS NEGÓCIOS</span><br><br><br><br><br>
          <span class="font-weight-bold" style="color: #fe0028; font-size: 40px; font-family: Century Gothic">NÓS CONSTRUIMOS BONS NEGÓCIOS</span><br><br><br><br><br>
        </div>
        <div class="col-lg-8" style="background-color: #8b0095; padding-left: 200px; padding-right: 100px"><br><br><br>
          <span style="color: white; font-size: 60px; font-family: Century Gothic">Olá &nbsp</span>
          <span style="color: white; font-size: 60px; font-family: Century Gothic" id="resultado2"><?php echo $_SESSION['nome'];?></span><br><br><br>

          <span class="text-white" style="font-size: 30px; font-family: Century Gothic">Obrigado por se cadastrar na nossa newsletter</span><br><br>

          <span class="text-white" style="font-size: 30px; font-family: Century Gothic">Segue abaixo os dados que nos enviou.</span><br><br><br>

          <span class="text-white" style="font-size: 30px; font-family: Century Gothic; font-weight: bold;">NOME: </span><span class="text-white" id="nome" style="font-size: 30px; font-family: Century Gothic; font-weight: bold;"><?php echo $_SESSION['nome'];?></span><br><br>
          <span class="text-white" style="font-size: 30px; font-family: Century Gothic; font-weight: bold;">E-MAIL: </span><span class="text-white" id="email" style="font-size: 30px; font-family: Century Gothic; font-weight: bold;"><?php echo $_SESSION['email'];?></span><br>
        </div>
      </div>

      <div class="page-section" id="servicos" style="background-color: #00052c; padding-bottom: 10px; padding-top: 40px;">
    <div class="container"><center>
    	<p style="color: white; font-weight: bold; font-size: 29px"><u>NOS SIGA!</u></p></center><br><br>
      <div class="row">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-4">
          <span class="fa fa-twitter" style="color: white; font-size: 50px"></span>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <span class="fa fa-facebook-square" style="color: white; font-size: 50px"></span>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <span class="fa fa-instagram" style="color: white; font-size: 50px"></span>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <span class="fa fa-youtube" style="color: white; font-size: 50px"></span>
          &nbsp&nbsp&nbsp&nbsp
          <span class="fa fa-linkedin-square" style="color: white; font-size: 50px"></span>
        </div>
        <div class="col-lg-4">

        </div>
      </div>
    </div><br><br><br><br>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>