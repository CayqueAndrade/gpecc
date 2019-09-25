<?php include_once ("includes/navbar.php"); ?>
<?php include_once ("php_action/conection.php");?>



<br/>
<hr>
<div class="container">
<table class="table table-bordered">
<thead>
      <tr>
        <th style="background:#90ee90;">Nome do Lote </th>
        <th style="background:#90ee90;">Valor inicial do lote (R$)</th>
        <th style="background:#90ee90;">Quantidade de gado</th>
        <th style="background:#90ee90;">Despesas (R$)</th>
        <th style="background:#90ee90;">Margem de lucro (R$)</th>
        <th style="background:#90ee90;">Editar</th>
        <th style="background:#90ee90;">Vender </th>
      </tr>
    </thead>
    <tbody>
    <?php
			$sql = "SELECT * FROM lote";
			$resultado = mysqli_query($connect, $sql);
      while ($dados = mysqli_fetch_array($resultado)):
    ?>    
      <tr>
        <td> <?php echo $dados['raca']; ?></td>
        <td> <?php echo $dados['peso_inicial']; ?></td>
        <td><?php echo $dados['qtd_gado']; ?></td>
        <td><?php echo $dados['cod_fazenda']; ?></td>
     
        <td><button id="Cadastrar" name="Cadastrar" class="btn btn-primary" type="Submit">Editar</button></td>
        <td><button id="Cadastrar" name="Cadastrar" class="btn btn-danger" type="Submit">Vender</button></td>
      </tr>
	    
      <?php endwhile; ?>
	  
    </tbody>

</table>
      </div>
<?php include_once("includes/footer.php"); ?>
