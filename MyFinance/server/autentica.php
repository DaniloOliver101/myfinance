<?php
	
	if(isset($_POST['email']) &&
		isset($_POST['senha']))
		{
		require_once 'conexao.class.php';
		
		$c = new conexao();
		$conn=$c->conn;
		$stmt = $conn->prepare("select * from tbl_clientes where email=:e and senha=:s");
		$stmt->bindValue(":e",$_POST['email']);
		$stmt->bindValue(":s",$_POST['senha']);
		$stmt->execute();
		
		//echo $stmt->rowCount();

		if($stmt->rowCount()==1){
			session_start();
			$resul=$stmt->fetch();
			$_SESSION['email']=$resul['email'];
			$_SESSION['nome']=$resul['Nomcli'];
			$_SESSION['sexo']=$resul['CodGenero'];
			$_SESSION['codCli']=$resul['codCli'];
			//$_SESSION['CodRenda']=$resul['CodRenda'];
			//header("Location:home.php");
			echo "1";
		}else{
			
			echo "0";
			
		}
	}else{
			echo "0";
			
		}
	
		
?>
