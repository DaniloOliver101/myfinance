<?php
 
mb_send_mail('danilo.oliveira142@gmail.com', 'Sem assunto', 'Teste');
ini_set('display_errors', 1);
 
error_reporting(E_ALL);
 
$from = "testing @ yourdomain";
 
$to = "danilo.oliveira142@gmail.com";
 
$subject = "Verificando o correio do PHP";
 
$message = "O correio do PHP funciona bem";
 
$headers = "De:". $from;
 
mail($to, $subject, $message, $headers);
 
echo "A mensagem de e-mail foi enviada.";
 
?>