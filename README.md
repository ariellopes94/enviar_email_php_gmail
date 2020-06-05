# enviar_email_php_gmail
Enviar e-mail com o Gmail

Usar o Php para enviar email com o gmail,
basta trocar os campos:

  $mail->Username = 'seuemail@gmail.com'; //Seu email
	$mail->Password = 'senhadoemail';  // Sua senha

	$mail->setFrom('seuemail@gmail.com'); //Nome do remetente 
	$mail->addAddress('endereco1@provedor.com.br'); //Email que ira receber a mensagem 01
	$mail->addAddress('endereco2@provedor.com.br'); //Email que ira receber a mensagem 02
