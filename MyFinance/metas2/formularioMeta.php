<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<?php 
$men = 1;
require("../Estilo/cabecalho.php");
?>

<?php
	require_once 'CadastroMetasCliente.php';
	$client = new cadastroMetaCliente();
?>

<h2>Inserir Cadastro  de Meta</h2>
	<form action="inserir.php" method="POST">
		<p>Metas: <select name="meta" id="meta">
		<option value="" >Selecione</option>
    	<?php
			 
			 $conexao = mysqli_connect('localhost','root','','dtb_poupando');
			 $sql = mysqli_query($conexao, "SELECT * FROM tbl_metas");
			 while ($row = $sql->fetch_assoc())
			 {
				 echo "<option value=". $row['DescricaoMeta'] .">" . $row['DescricaoMeta'] . "</option>";
			 }
			 ?>
		</select> 

		<p>Valor da Meta: <input type="text" name="Valor"></p>
		<p>Data de Conclusão:<input type="date" name="dataconclusao"></p>
		
<p><input type="submit"  class="btn btn-success" value= "Cadastar"></p>

<p><a href ="/ProjetoPoupando/Meta/meta.php" class="btn btn-danger "  >Cancelar</a></P>
		</form>

<?php require("../Estilo/rodape.php");?>	