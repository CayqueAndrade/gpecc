<?php 
include('php_action/conection.php');
$sql = "SELECT * FROM lote l, fazenda f WHERE l.cod_fazenda=f.cod_fazenda";
//$sql = "SELECT * FROM lote WHERE cod_fazenda=1";
$resultado = mysqli_query($connect, $sql);

$fazenda = mysqli_fetch_object($resultado);
echo '<pre>';
var_dump($fazenda);
echo '</pre>';
echo '<br>';
echo $fazenda->nome;
echo '<br>';
echo $fazenda->nome_lote;

?>