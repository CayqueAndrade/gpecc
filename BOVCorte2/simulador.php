<?php include("includes/navbar.php");?>
<?php include_once 'php_action/conection.php';  ?>

<br />
<br />
<div class="container">
    <label for="quantidade" class="text">Informe a Quantidade</label>
</div>

<div class="container">
    <div>
        <form class="form-inline" method="POST" action="simulador.php">

            <div class="form-group mx-sm-3 mb-2">
                <input type="text" class="form-control" name="valor" size="5" />
            </div>
            <button type="submit" class="btn btn-primary mb-2" value="calcular">Calcular</button>
        </form>
        <hr>

        <?php

$sql = "SELECT * FROM preco_base limit 1";
$resultado = mysqli_query($connect, $sql);

$preco_base = mysqli_fetch_object($resultado);

@$valor = $_POST["valor"];

$sal = $preco_base->sal;
$remedio = $preco_base->remedio;
$racao = $preco_base->racao;
$pasto = $preco_base->aluguel_pasto;

$result = ($sal + $remedio + $racao) * $valor;
$exibevalorsal = $valor==0 ?  '-' : number_format($sal,2,',','.');
$exibevalorremedio = $valor==0 ?  '-' : number_format($remedio,2,',','.');
$exibevalorracao = $valor==0 ?  '-' : number_format($racao,2,',','.');

$exibevalortotal = $valor==0 ? '-' : number_format($result,2,',','.');

?>
<?php

$m1s = $valor * $sal;
$m2r = $valor * $remedio;
$m3ra = $valor * $racao;

$exibevalorm1s = $valor==0 ?  '-' : number_format($m1s,2,',','.');
$exibevalorm2r = $valor==0 ?  '-' : number_format($m2r,2,',','.');
$exibevalorm3ra = $valor==0 ?  '-' : number_format($m3ra,2,',','.');


?>

        <table class="table table-bordered striped">
            <br>
            <thead>
                <tr>
                    <th style="background:#90ee90;">Sal </th>
                    <th style="background:#90ee90;">Vermífugo</th>
                    <th style="background:#90ee90;">Ração</th>
                    <!-- <th style="background:#90ee90;">Aluguel Pasto</th>  -->
                    <th style="background:#90ee90;">TOTAL</th>

                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> <?php echo "R$ ".$exibevalorsal ?></td>

                    <td><?php echo "R$ ".$exibevalorremedio; ?></td>

                    <td><?php echo "R$ ".$exibevalorracao; ?></td>

                    <!-- <td>R$ <?php echo $pasto; ?></td> -->

                    <!-- <td><?php echo "R$ ".$exibevalortotal ?> </td> -->
                </tr>
                <tr>
                    <td> <?php echo "R$ ".$exibevalorm1s ?></td>

                    <td><?php echo "R$ ".$exibevalorm2r; ?></td>

                    <td><?php echo "R$ ".$exibevalorm3ra; ?></td>

                    <!-- <td>R$ <?php echo $pasto; ?></td> -->

                    <td><?php echo "R$ ".$exibevalortotal ?> </td>
                </tr>

            </tbody>
        </table>
        <?php if ($valor == 0) {?>
    </div>
</div>
<?php } else { ?>

<ul>
    <li>Valores baseados em período de 1 ano para <b><?php echo $valor?> </b>cabeças de gado</li>
    <li>Sal: 10 kg de sal</li>
    <li>Vermífugo: 2 doses/ano</li>
    <li>Ração: 600 kg/ano</li>

</ul>
<?php } ?>

<div class="container">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-primary" type="Submit">Imprimir</button>
</div>
<hr>
<?php include("includes/footer.php")?>