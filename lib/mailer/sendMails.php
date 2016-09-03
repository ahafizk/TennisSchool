<?php
require("class.phpmailer.php");
//mailSend($mailMessage='');
function mailSend($mailArray,$name='')
{
	//if(!strcasecmp())
	//$mailArray = explode($mailMessage);
	
	
	$mail = new PHPMailer();
	
	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "mail.google.com";  // specify main and backup server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "monti1811@gmail.com";  // SMTP username
	$mail->Password = "18111990"; // SMTP password

	$mail->From = "monti1811@gmail.com";
	$mail->FromName = "Tennis Sport Admin";
	$mail->AddAddress($mailArray['to'],$name);
	///$mail->AddAddress("ellen@example.com");                  // name is optional
	////$mail->AddReplyTo("info@example.com", "Information");

	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	//$mail->AddAttachment($file);         // add attachments
	///$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
	$mail->IsHTML(true);                                  // set email format to HTML

	$mail->Subject = $mailArray['subject'];
	$mail->Body    = $mailArray['body'];//"Please find the attached report";
	///$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

	if(!$mail->Send())
	{
	   	//echo "Message could not be sent. <p>";
   		//echo "Mailer Error: " . $mail->ErrorInfo;
		return false;
	}else
	{
		return true;
		}
	//echo "Message has been sent";
}//end of function
?>
