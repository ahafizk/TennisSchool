<?php 
require_once('../../common/forwarding.php');
//require_once('../../control/invoice/cprocess.php');
require_once('../../model/invoice/Rinvoice.php');
//require_once("mailer/class.phpmailer.php");
require_once('../../lib/mailer/sendMails.php');
if(isset($_POST['count']))
{
	require_once("pdf/make_pdf.php");
	
	$rin = new Rinvoice();
	$path = "../../pdf_files/";
	
	$cntR = $_POST['count'];
	$cntN =0; //get the actuall number of people to be selected
	
	for($i=0;$i<$cntR;$i++)
	{
		$checked = "user_id".$i;
		if(isset($_POST[$checked]))
		{
			$cntN = $cntN + 1;
			$user_id = $_POST[$checked];
			$record = $rin->get_info($user_id );
			$file = time()."".$i;
			$inv_no = $file;
			$pdf_file = $file.".pdf";
			$paths = "../../pdf_files/html/$file".".html";
			$pdf_path = "../../pdf_files/";
			$path = "../../pdf_files/html/file.html";
			$date = date('Y-m-d');
			create_pdf_str($record,$path,$date,$inv_no);
			$body = creatPDF($path,$pdf_file,$pdf_path); //now got the html body
			$subject = "Invoice of this session";
			$to = $record['email'][0];
			$user_name = $record['initial'][0]." ".$record['call_name'][0]." ".$record['middle_name'][0]." ".$record['last_name'][0];
//			$message = ('to'=>$to,'body'=>$body,'subject'=>$subject);
//			$url = "mailer/csuccess.php?email=".$record['email'][0]."&file_name=".$pdf_file;
//			$ret = mailSend($message,$user_name);
			//forward($url);
			//sendClientMail();
		}
	}//for
	forward('success.php?total='.$cntN);
}

function create_pdf_str($record,$file,$date,$inv_no)
{
	$months = array(1=>'January',2=>'February',3=>'March',4=>'April',5=>'May',6=>'June',7=>'July',8=>'August',9=>'September',10=>'October',11=>'November',12=>'December');
	$weekDay = array(1=>'Monday',2=>'Tuesday',3=>'Wednesday',4=>'Thusday',5=>'Friday',6=>'Saturday',7=>'Sunday');
	$d1 = date_parse($record['start_date'][0]);
	$d2 = date_parse($record['end_date'][0]);
	
	$month1 = $months[(int)$d1['month']];
	$month2= $months[(int)$d2['month']];
	$subtotal = ($record['tution_fees'][0]*$record['vat'][0])/100;
	$total = $record['tution_fees'][0]+ $subtotal;
	
	$str ='';
	$str .="<html>
	<head>
	<meta content=\"text/html; charset=iso-8859-1\" http-equiv=Content-Type>
	<meta content=\"nl\" http-equiv=\"Content-Language\">
	</head>
	<body leftMargin=\"0\" rightMargin=\"0\" topMargin=\"0\" marginheight=\"0\" marginwidth=\"0\" style=\"font-family: Arial; color: 	#000066; font-size: 10pt\" bgcolor=\"#F1F1FF\">

	<table  border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" >
	<tr>
	<td  align=\"left\" valign=\"top\">LOGO TENNIS SCHOOL</td>
	<td  align=\"center\" valign=\"top\"><font face=\"Arial\" size=\"8\" color=\"#000000\"><b>TENNIS SCHOOL NAME </b></font><br/><font face=\"Arial\" size=\"6\" color=\"#000000\">TENNIS SCHOOL ADDRESS </font><br/><font face=\"Arial\" size=\"6\" color=\"#000000\">PHONE AND FAX NUMBER SCHOOL </font>
	<br/><font face=\"Arial\" size=\"6\" color=\"#000000\">SCHOOL EMAIL ADDRESS</font></td>
	<td  nowrap align=\"right\" valign=\"top\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>INVOICE</b></font></td>
	</tr>
	</table>
	<hr size=\"4\" color=\"#000066\">

	<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
	<tr>
	<td valign=\"top\" width=\"30\"><font face=\"Arial\" size=\"6\" color=\"#000000\">To:&nbsp;&nbsp;</font></td>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>".$record['initial'][0]." ".$record['first_name'][0]." ".$record['middle_name'][0]." ".$record['last_name'][0]."</b></font></td>
	</tr>
	<tr>
	<td width=\"30\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td><td><font face=\"Arial\" size=\"6\" color=\"#000000\">".$record['street'][0]." , ".$record['house_number'][0]."</font></td>
	</tr>
	<tr>
	<td width=\"30\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td><td><font face=\"Arial\" size=\"6\" 	color=\"#000000\">".$record['post_code'][0].", ".$record['home_plate'][0]."</font></td>
	</tr>
	</table>
	<p>&nbsp;</p>

	<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
	<tr>
	<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Invoice Date</font></td>
	<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">".$date."</font></td>
	</tr>
	<tr>
	<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>Invoice Number</b>&nbsp;&nbsp;</font></td>
	<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>".$inv_no."</b></font></td>
	</tr>
	<tr>
	<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Relationship Number</font></td>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">".$record['user_id'][0]."</font></td>
	</tr>
	<tr>
	<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Season</font></td>
	<td><font face=\"Arial\" size=\"6\" color=\"#000000\">---</font></td>
	</tr>
	</table>
	<p>&nbsp;</p>
	<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\" bgcolor=\"#E1E1E1\">
	<tr>
	<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Description</font></td>
	<td><font face=\"Arial\" size=\"1\" color=\"#000000\">&nbsp;</font></td>
	<td align=\"right\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Rate</font></td>
	<td align=\"right\"><font face=\"Arial\" size=\"6\" color=\"#000000\">VAT</font></td>
	</tr>
	<tr>
	<td colspan=\"6\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>Lesson / Training</b></font></td>
	</tr>
	<tr>
	<td colspan=\"6\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>TRAINEE NAME</b> student concerns.</font></td>
	</tr>
	<tr>
	<td valign=\"top\"><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Type</font></td>
	<td nowrap valign=\"top\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">".$record['lesson_type'][0]."</font></td>
	<td colspan=\"2\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td align=\"right\" valign=\"top\" nowrap ><font face=\"Arial\" size=\"6\" color=\"#000000\">&euro;&nbsp;".$record['tution_fees'][0]."</font>		</td>
	<td align=\"right\" valign=\"top\" nowrap ><font face=\"Arial\" size=\"6\" color=\"#000000\">".$record['vat'][0]."</font></td>
	</tr>
	<tr>
	<td valign=\"top\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Group</font></td>
	<td nowrap valign=\"top\"><font face=\"Arial\" size=\"6\" color=\"#000000\">".$record['group_num'][0]."</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Period</font></td>
	<td nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>".$month1."</b> to <b>".$month2."</b>"."</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td valign=\"top\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Match day and time</font></td>
	<td nowrap valign=\"top\" colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>DAY OF LESSON</b> van <b>START TIME	</b> tot END TIME; TENNIS LANE<br/>LOCATION NAME, LOCATION ADRES, LOCATION ZIPCODE + CITY</font></td>

	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Maximum students</font></td>
	<td nowrap colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">".$record['max_member'][0]." own review of trainees</font></td>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Number of lessons</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>".$record['num_lesson'][0]."</b></font></td>
	<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">Subtotal excluding VAT&nbsp;</font></td>
	<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">&euro;&nbsp;".$record['tution_fees'][0]."</font></td>
	<td><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">Subtotal 6% VAT&nbsp;</font></td>
	<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">&euro;&nbsp;".$subtotal."</font></td>
	<td><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr>
	<tr>
	<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>TOTAL TO PAY</b>&nbsp;</font></td>
	<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>&euro;&nbsp;".$total."</b></font></td>
	<td><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
	</tr></table>
	<p><font face=\"Arial\" size=\"6\" color=\"#000000\">You can pay by clicking the following link: http://www.therandomshiz.com/sport/view/payment/payment.php?user_id=".$record['user_id'][0]."</font></p>
	</body>
	</html>";
    $fp =fopen("$file","w+");
	
	fwrite($fp,$str);
	fclose($fp);
	return $str;
}
/*function sendClientMail()
{
	$mail = new PHPMailer();

	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->Host = "smtpout.secureserver.net";  // specify main and backup server
	$mail->SMTPAuth = true;     // turn on SMTP authentication
	$mail->Username = "support@lighthousemarines.com";  // SMTP username
	$mail->Password = "ABCabc123"; // SMTP password

	$mail->From = "support@lighthousemarines.com";
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
		return true;
	   	//echo "Message could not be sent. <p>";
	   //	echo "Mailer Error: " . $mail->ErrorInfo;
	}else
		{
			echo "Message has been sent";
			//forwarding('../success.php');
	}
}//end of function*/
?>
