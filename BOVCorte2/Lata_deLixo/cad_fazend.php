<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>GepecC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="teste.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"
	
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  

</head>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="index.html">GepecC </a>
 
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="#">LOTE</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="fazenda.html">FAZENDA</a>
  </li>
	
	 <li class="nav-item">
      <a class="nav-link" href="simulador.html">SIMULADOR</a>
   </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       CADASTRO 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="cadastro_lote.html">Lote </a>
        <a class="dropdown-item" href="cadastro_fazenda.html">Fazenda</a>

      </div>
    </li>
  </ul>
	</nav>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" style="color: deepskyblue;">BEZERRO: R$340,00 </a>
    </li>
   <li class="nav-item">
      <a class="nav-link" href="#"  style="color: palegreen;">BOI GORDO: R$990,00 </a>
    </li>
	 <li class="nav-item">
      <a class="nav-link" href="#"  style="color: gold;" >VALOR DA ARROBA: R$138,00 </a>
    </li>
	
	 
  </ul>
    </nav>

<div class="container">
  <br>
  <form action="php_action/add.php" method="POST">
  <div class="form-group">
    <label for="NomeFazenda">Nome da Fazenda</label>
    <input type="text" class="form-control" id="nome" name="nome"  autofocus>
    <small id="notemail" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Endereço</label>
    <input type="text" class="form-control" id="endereço" name="endereço">
  </div>
  <div class="form-group">
    <label for="CPF">CPF/CNPJ</label>
    <input type="text" class="form-control" id="cnpj" name="cnpj" onkeypress="$(this).mask('00.000.000/0000-00')">
  </div>

  <div class="form-group">
    <label for="Numero">Numero de Inscrição</label>
    <input type="text" class="form-control" id="ins" name="ins">
  </div>
  
  <button type="cadastrar" name="cadastrar" class="btn btn-primary">Cadastrar</button>    
</form>

</div><br>
<!-- Footer 
<footer class="page-footer font-small bg-dark dark">
<!-- Copyright -->
  <div class="footer-copyright text-center py-2">© 2019 Copyright:
    <a href="" style="text-color white"> Todos os direitos reservados</a>
  </div>
<!-- Copyright 
        </footer>-->
      </head>
    </html>