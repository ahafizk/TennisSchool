<?php
require_once("class.phpmailer.php");
require_once("../../../common/common.php");

$email = $_POST['to'];
$subject  = $_POST['subject'];
$message = $_POST['message'];
$path = $_POST['path'];
$file_name = $_POST['file_name'];
$file = $path."".$file_name;

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.website-reactie.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "testing@website-reactie.com";  // SMTP username
$mail->Password = "dJPaqCQE3es7"; // SMTP password

$mail->From = "amin@interport.org";
$mail->FromName = "Mailer";
$mail->AddAddress($_GET['addr']);
///$mail->AddAddress("ellen@example.com");                  // name is optional
////$mail->AddReplyTo("info@example.com", "Information");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->AddAttachment($file);         // add attachments
///$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = $message;
$mail->to = $email;
///$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   	echo "Message could not be sent. <p>";
   	echo "Mailer Error: " . $mail->ErrorInfo;
}else
	{
		echo "Message has been sent";
		forwarding('../success.php');
	}
?>


?>