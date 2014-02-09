<?php
/**
 * Contact file
 * @author Joan Fernandez <joan(at)joanfernandez(dot)es>
 *
 */


require("../phpmailer/class.phpmailer.php");


$_name = utf8_encode($_POST['name']);
$_email = utf8_encode($_POST['email']);
$_comment = utf8_encode($_POST['comment']);


// subject
$subject = 'Nuevo mensaje de '.$_name.' desde formulario de contacto';


$mail = new PHPMailer();

$mail->IsSMTP(); // send via SMTP
$mail->Host = "smtp.example.com"; // SMTP servers
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
$mail->Username = "username"; // SMTP username
$mail->Password = "password"; // SMTP password

$mail->IsHTML(true);
$mail->SetFrom('no-reply@example.com', 'No-Reply');
$mail->AddAddress("emailto@example.com");

$mail->Subject  = 'Nuevo mensaje de '.$_name.' desde formulario de contacto';
$mail->Body     = '<html>
<head>
  <title>Nuevo mensaje de '.$_name.'</title>
</head>
<body>
  <h1>Nuevo mensaje desde contacto</h1>
  <dl>
    <dt><strong>Nombre</strong></dt>
    <dd>'.$_name.'</dd>

    <dt><strong>Correo</strong></dt>
    <dd>'.$_email.'</dd>

    <dt><strong>Comentario</strong></dt>
    <dd>'.$_comment.'</dd>
  </dl>
</body>
</html>
';

if(!$mail->Send()) {
  echo $mail->ErrorInfo;
} else {
  echo '200';
}