<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>GpecC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once 'php_action/conection.php';  ?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="teste.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  

</head>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="index.html">GpecC </a>

  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="lote.php">LOTE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="fazenda.php">FAZENDA</a>
    </li>
	
	 <li class="nav-item">
      <a class="nav-link" href="simulador.php">SIMULADOR</a>
    </li>
	

   
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       CADASTRO 
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="cadastro_lote.php">Lote </a>
        <a class="dropdown-item" href="cadastro_fazenda.php">Fazenda</a>

      </div>
    </li>
  </ul>
	</nav>

	<?php

$sql = "SELECT * FROM preco_base";
$resultado = mysqli_query($connect, $sql);

$preco_base = mysqli_fetch_object($resultado);

$gado_bezerro = $preco_base->gado_bezerro;
$gado_gordo = $preco_base->gado_gordo;
$arroba = $preco_base->arroba;

$bezerro = $gado_bezerro;
$boi_gordo = $gado_gordo;
$arroba = $arroba;

$exibevalorbez = number_format($bezerro,2,',','.');
$exibevalorgordo = number_format($boi_gordo,2,',','.');
$exibevalorarroba = number_format($arroba,2,',','.');
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: deepskyblue;">BEZERRO <?php echo "R$ ".$exibevalorbez; ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: palegreen;">BOI GORDO <?php echo"R$ ".$exibevalorgordo;?> </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: gold;">VALOR DA ARROBA <?php echo "R$ ".$exibevalorarroba;?></a>
        </li>
    </ul>
</nav>