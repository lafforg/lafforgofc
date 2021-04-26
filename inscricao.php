<?php
date_default_timezone_get('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nomeline = isset($_post)['nomeline']) ? $post $_post['nomeline'] : 'Não Informado';
$tagline = isset($_post)['tagline']) ? $post $_post['tagline'] : 'Não Informado';
$p1 = isset($_post)['p1']) ? $post $_post['p1'] : 'Não Informado';

$data = date ('d/m/Y H:i:s');

if($tagline && $p1){
$mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'laffofc@gmail.com';
	$mail->Password = 'cartucho123';
	$mail->Port = 587;

	$mail->setFrom('laffofc@gmail.com');
	$mail->addAddress('laffofc@gmail.com');
	$mail->addAddress('endereco2@provedor.com.br');

	$mail->isHTML(true);
	$mail->Subject = $p1;
	$mail->Body = "nometime: {$nometime}<br>
	tagline: {$tagline}<br>
	p1: {$p1}";

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}

} else {
	echo 'informe todos os campos';
}

