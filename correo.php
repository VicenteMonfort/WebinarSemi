<?php 
// Por si existen errores
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$subject = $_POST['subject'];
$msg = $_POST['msg'];
$from = $_POST['from'];

$headers = "From: vmonfort@florida-uni.es\r\n"; 
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
	
if(mail($from, $subject, $msg,$headers)){
	echo "mail enviado";
	}else{
	$errorMessage = error_get_last()['msg'];
	echo $errorMessage;
}
?>