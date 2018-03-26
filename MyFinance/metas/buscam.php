<?php
session_start();

    require_once 'CadastroMetasCliente.php';
    $client = new cadastroMetaCliente();
    $resp = $client->buscarTodos();

	foreach($resp as $linha){
    
		$vetor[] = array_map('utf8_decode', $linha);
	}
    echo json_encode($vetor);

?>
