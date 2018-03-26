<?php
//session_start();
    //Conectando ao banco de dados
    include("../server/conexao.class.php");
    
 $con = mysqli_connect('localhost','root','','dtb_poupando');
 //$con = new conexao();
    
    //Consultando banco de dados
 				$sql = mysqli_query($con, "SELECT * FROM `tbl_metascliente` WHERE CodCli = 1");
				while ($row = $sql->fetch_assoc())
				{
				$vetor[] = array_map('utf8_encode', $row);				
	    			//echo json_encode($row);				//echo "<option value=". $row['CodGenero'] .">" . $row['DesGenero'] . "</option>";
				}
				echo json_encode($vetor);

    
?>