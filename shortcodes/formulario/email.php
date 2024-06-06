<?php
header('Content-Type: text/html; charset=UTF-8');
ini_set('default_charset', 'UTF-8');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  /* // Validar nome
  if (empty($_POST['nome'])) {
      $errors['nome'] = "Nome é obrigatório";
      print_r($errors['nome']);
  } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST['nome'])) {
      $errors['nome'] = "Somente letras e espaços em branco são permitidos (remova acentos ou cedilhas)";
      print_r($errors['nome']);
  }

  // Validar e-mail
  if (empty($_POST['email'])) {
      $errors['email'] = "E-mail é obrigatório";
      print_r($errors['email']);
    } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Formato de e-mail inválido";
      print_r($errors['email']);
    }
    
    // Validar telefone
    if (empty($_POST['contato'])) {
      $errors['contato'] = "Telefone é obrigatório";
      print_r($errors['contato']);
    } elseif (!preg_match("/^\(\d{2}\) \d{1} \d{4}-\d{4}$/", $_POST['contato'])) {
      $errors['contato'] = "Formato de telefone inválido.";
      print_r($errors['contato']);
    }
    
    // Validar mensagem
    if (empty($_POST['mensagem'])) {
      $errors['mensagem'] = "A mensagem é obrigatória";
      print_r($errors['mensagem']);
    } elseif (strlen($_POST['mensagem']) > 500) {
      $errors['mensagem'] = "A descrição não pode ter mais de 500 caracteres";
      print_r($errors['mensagem']);
  } */

  // Salvar os dados e redirecionar para a página de sucesso
  $name = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $contato = htmlspecialchars($_POST['contato']);
  $subject = 'ORÇAMENTO - '. $name. ' ('.$email.')';
  $message = htmlspecialchars($_POST['mensagem']);
  
  $mail = new PHPMailer(true);

  try {
    //Server settings
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;                      // SMTP::DEBUG_SERVER => adicionar essa informação para habilitar o DEBUG DO PHPMAILER
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'mail.endecode.com.br';                       // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'contato@endecode.com.br';                // SMTP username
    $mail->Password   = 'EndecodeBR159';                             // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->SMTPSecure = 'ssl';

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('contato@endecode.com.br');     // Add a recipient
    $mail->addReplyTo($email);

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    =
      '<div style="font-size: 1.2em;">
        <span style="font-weight: bold;">Nome:</span> '.$name.'<br><br>'.
        '<span style="font-weight: bold;">E-mail:</span> '.$email.'<br><br>'.
        '<span style="font-weight: bold;">Contato:</span> '.$contato.'<br><br>'.
        '<span style="font-weight: bold;">Mensagem:</span> '.$message.'<br><br>'.
      '</div>';

    $return = $mail->send();
    
    echo "<script>console.log('Deu certo')</script>";
    
    // exibe a mensagem de sucesso
    $log_file = 'C:\xampp\htdocs\meusite\log\sucess.log';

    if (!file_exists($log_file)) {
        touch($log_file);
        error_log(date('Y-m-d H:i:s') . '| E-mail enviado com sucesso para '.$name.'.', 3, $log_file);
    }
    
  } catch (Exception $e) {
    $log_file = 'C:\xampp\htdocs\meusite\log\error.log';

    if (!file_exists($log_file)) {
        touch($log_file);
        error_log(date('Y-m-d H:i:s') . '| Erro ao enviar e-mail para '.$name.'.' . $e->getMessage(), 3, $log_file);
    }
  }
  /* if (empty($errors)) {
  } */

}
