<?php include("includes/navbar.php"); ?>
<?php include_once 'php_action/conection.php';  ?>



<?php
$sql = "SELECT cod_fazenda, nome FROM fazenda ";
$resultado = mysqli_query($connect, $sql);

$fazenda = mysqli_fetch_object($resultado);
$nome = $fazenda->nome;

?>

<div class="container">
    <?php
$sql = "SELECT * FROM lote";
$resultado = mysqli_query($connect, $sql);

$lote = mysqli_fetch_object($resultado);

$nomelote = $lote->nome_lote;
$id = $lote->cod_lote;

?>
   
    <br>
     <h5 style="font-family: Verdana !important">Acompanhe seus lotes cadastrados</h5>
     <hr>
    <h2><?php echo "Fazenda ".$nome ?> </h2>
       
   
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="background:#90ee90;">Nome do lote </th>
                <th style="background:#90ee90;">Valor inicial do lote (R$)</th>
                <th style="background:#90ee90;">Quantidade de gado</th>
                <th style="background:#90ee90;">Despesas (R$)</th>
                <th style="background:#90ee90;">Margem de lucro (R$)</th>
                <th style="background:#90ee90;">Editar</th>
                <th style="background:#90ee90;">Vender </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nomelote ?></td>
                <td>R$ 50.000</td>
                <td>25</td>
                <td style="color:red;">R$ 5.000</td>
                <td style="color:green;">R$ 1.000</td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-primary" type="Submit">Editar</button></td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-danger" type="Submit">Vender</button></td>
            </tr>
            <tr>
                <td>GC02</td>
                <td>R$ 100.000</td>
                <td>70</td>
                <td style="color:red;">R$ 15.000</td>
                <td style="color:red;">R$ 0,00</td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-primary" type="Submit">Editar</button></td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-danger" type="Submit">Vender</button></td>
            </tr>
            <tr>
                <td>GC03</td>
                <td>R$ 200.000</td>
                <td>90</td>
                <td style="color:red;">R$ 25.000</td>
                <td style="color:green;">R$ 2.000</td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-primary" type="Submit">Editar</button></td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-danger" type="Submit">Vender</button></td>
            </tr>
        </tbody>
    </table>
    <hr>
</div>

<div class="container">
    <!-- <h2>FAZENDA TCC </h2>
    <p>Acompanhe seus lotes cadastrados:</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th style="background:#90ee90;">Nome do lote </th>
                <th style="background:#90ee90;">Valor inicial do lote (R$)</th>
                <th style="background:#90ee90;">Quantidade de gado</th>
                <th style="background:#90ee90;">Despesas (R$)</th>
                <th style="background:#90ee90;">Margem de lucro (R$)</th>
                <th style="background:#90ee90;">Editar</th>
                <th style="background:#90ee90;">Vender </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>GC01</td>
                <td>R$ 50.000</td>
                <td>25</td>
                <td style="color:red;">R$ 5.000</td>
                <td style="color:green;">R$ 1.000</td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Editar</button></td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Vender</button></td>
            </tr>
            <tr>
                <td>GC02</td>
                <td>R$ 100.000</td>
                <td>70</td>
                <td style="color:red;">R$ 15.000</td>
                <td style="color:red;">R$ 0,00</td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Editar</button></td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Vender</button></td>
            </tr>
            <tr>
                <td>GC03</td>
                <td>R$ 200.000</td>
                <td>90</td>
                <td style="color:red;">R$ 25.000</td>
                <td style="color:green;">R$ 2.000</td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Editar</button></td>
                <td><button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Vender</button></td>
            </tr>-->

    </table>


    <?php include("includes/footer.php"); ?>