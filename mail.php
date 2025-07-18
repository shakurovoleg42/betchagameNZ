<?php
require 'betchagame-phpmailer/betchagame-PHPMailer.php';
require 'betchagame-phpmailer/betchagame-SMTP.php';
require 'betchagame-phpmailer/betchagame-Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$title = "Новая заявка с сайта";
$body = '';
$c = true;

foreach ($_POST as $key => $value) {
  if ($value != "") {
    $body .= "
    " . (($c = !$c) ? '<tr>' : '<tr style="background-color: #f8f8f8;">') . "
      <td style='padding:10px; border:1px solid #e9e9e9;'><b>$key</b></td>
      <td style='padding:10px; border:1px solid #e9e9e9;'>$value</td>
    </tr>";
  }
}
$body = "<table style='width:100%;'>$body</table>";

$mail = new PHPMailer();

try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth = true;

  $mail->Host = 'smtp.gmail.com';
  $mail->Username = 'patri@gmail.com';
  $mail->Password = 'ctsbulhgqsrjzvur';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('patri@gmail.com', 'BetchaGame Form');
  $mail->addAddress('patri@gmail.com');

  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  $mail->send();
  echo "Письмо успешно отправлено!";
} catch (Exception $e) {
  http_response_code(500);
  echo "Ошибка отправки: {$mail->ErrorInfo}";
}
