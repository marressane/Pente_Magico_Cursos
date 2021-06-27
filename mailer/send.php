<?php
// date_default_timezone_set('America/Sao_Paulo');
 
require_once('phpmailer/PHPMailer.php');
require_once('phpmailer/SMTP.php');
require_once('phpmailer/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['message']) && !empty(trim($_POST['message'])))) {
 
	$name = !empty($_POST['name']) ? $_POST['name'] : 'Não informado';
	$email = $_POST['email'];
	$subject = !empty($_POST['subject']) ? utf8_decode($_POST['subject']) : 'Não informado';
	$message = $_POST['message'];
	$data = date('d/m/Y H:i:s');
 
	$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'jacintoenigmamulungo@gmail.com';
	$mail->Password = '123#JM@enigma';
	$mail->Port = 587;
 
	$mail->setFrom('jacintoenigmamulungo@gmail.com');
	$mail->addAddress('jacintoenigmamulungo@gmail.com');
 
	$mail->isHTML(true);
	$mail->Subject = $subject;
	$mail->Body = "Nome: {$name}<br>
				   Email: {$email}<br>
				   message: {$message}<br>
				   Data/hora: {$data}";
 
	if($mail->send()) {
		echo 'Email enviado com sucesso.';
	} else {
		echo 'Email não enviadoo.';
	}
} else {
	echo 'Não enviado: informar o email e a message.';
}