<?php 
session_start();

?>

<?php
	require_once 'CadastroMetasCliente.php';
	$desc=$_POST['meta'];
	$vm=$_POST['Valor'];
	$dc=$_POST['dataconclusao'];
	$id=$_SESSION['codCli'];

	
	$client = new cadastroMetaCliente();
	$client->setcodCli($id);
	$client->setDescricao($desc);
	$client->setValor($vm);
	$client->setDataConclusao($dc);
	$client->inserir();
	print "<p><Sua nova meta<p> " .$desc. "<p> Foi incluido com sucesso!</p>";
	print "<p><a href='/ProjetoPoupando/Meta/meta.php' class='btn btn-info'>Voltar</a></p>";
?>	
