<?php 
session_start();

	require_once 'CadastroMetasCliente.php';
	$motivo = $_POST['txtmotivo'];
	$desc=$_POST['txtdescmeta'];
	$vm=$_POST['txtvalmeta'];
	$dc=$_POST['txtdatmeta'];
	$id=$_SESSION['codCli'];

	
	$client = new cadastroMetaCliente();
	$client->setcodCli($id);
	$client->setDescricao($desc);
	$client->setValor($vm);
	$client->setDataConclusao($dc);
	$client->setMotivo($motivo);
	$client->inserir();
	echo 1;

?>	
