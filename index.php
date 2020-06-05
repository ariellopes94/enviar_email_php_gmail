<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'seuemail@gmail.com'; //Seu email
	$mail->Password = 'senhadoemail';  // Sua senha
	$mail->Port = 587;

	$mail->setFrom('seuemail@gmail.com'); //Nome do remetente 
	$mail->addAddress('endereco1@provedor.com.br'); //Email que ira receber a mensagem 01
	$mail->addAddress('endereco2@provedor.com.br'); //Email que ira receber a mensagem 02

	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via Gmail Ariel Lopes';
	$mail->Body = 'Chegou o email teste do <strong>Teste envio por Gmail ariel-edit@hotmail.com</strong>';
	$mail->AltBody = 'Chegou o email teste, mais informações : ariel-edit@hotmail.com';

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}