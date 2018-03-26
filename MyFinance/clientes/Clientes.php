<?php
session_start();
include('dados.class.php');

$nome = $_POST['txtnome'];
echo $nome;
$email = $_POST['txtemail'];
$datnasc = $_POST['txtdatnasc'];
echo $datnasc;
$genero = $_POST['txtgenero'];
$coduf = $_POST['txtcoduf'];
$senha = $_POST['txtsenha'];
$newcli = new dados();

$newcli->setNomcli($nome);
$newcli->setEmail($email);
$newcli->setDatnasc($datnasc);
$newcli->setCodgenero($genero);
$newcli->setCoduf($coduf);
$newcli->setSenha($senha);
$newcli->newcliente();



//autenticação


		require_once '../server/conexao.class.php';
		
		$c = new conexao();
		$conn=$c->conn;
		$stmt = $conn->prepare("select * from tbl_clientes where email=:e and senha=:s");
		$stmt->bindValue(":e",$_POST['email']);
		$stmt->bindValue(":s",$_POST['senha']);
		$stmt->execute();
		
		//echo $stmt->rowCount();

			$resul=$stmt->fetch();
			$_SESSION['email']=$resul['email'];
			$_SESSION['nome']=$resul['Nomcli'];
			$_SESSION['sexo']=$resul['CodGenero'];
			$_SESSION['codCli']=$resul['codCli'];
			//$_SESSION['CodRenda']=$resul['CodRenda'];
			header("Location:../home2/home.php");




?>