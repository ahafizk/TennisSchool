<?php
require_once('../../lib/mailer/sendMails.php');
require_once('../../common/forwarding.php');
require_once('../../common/common.php');
if(isset($_POST['send']))
{
	$to = $_POST['email'];
	$body =$_POST['body'];
	$date = $_POST['date1'];
	$subject = $_POST['subject'];
	$signature = $_POST['signature'];
	$_SESSION['to'] = $to;
	$_SESSION['body'] = $body;
	$_SESSION['date'] = $date;
	$_SESSION['subject'] = $subject;
	$_SESSION['signature'] = $signature;
	$body = create_body($body,$signature,$date);
	$mesg = array('body'=>$body,'subject'=>$subject,'to'=>$to);
	mailSend($mesg);
	forward('../admin/index.php');
}
function create_body($body,$signature,$date)
{
		$str = '';
		$str.="<html>";
		$str.="<head>";
		$str.="</head>";
		$str.="<body style=\"background-color:#E0EDF0\">";
		$str.="<p align=\"right\" style=\"font-size:14px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">$date</p>";
		$str.="<p style=\"font-size:16px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">Dear Student,</p>";
		$str.="<p style=\"font-size:14px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">$body</p>";
	$str.="<p align=\"left\" style=\"font-size:14px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">$signature</p>";
		$str.="</body>";
		$str.="</html>";	
		return $str;
}
?>