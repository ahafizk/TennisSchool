<?php
require_once('../../model/settings/Rsettings.php');
require_once('../../lib/mailer/sendMails.php');
require_once('../../common/forwarding.php');
$rsetting = new Rsettings();
if(isset($_POST['save']))
{
	$subject = $_POST['subject'];
	$body = $_POST['body'];
	$date = $_POST['date1'];
	$signature = $_POST['signature'];
	if(isset($_POST['send']))
	{
		// send the announcement to all student.
		//make_email($body)
		$email = $rsetting->get_emails();
		$cnt = count($email['email']);
//                $body = $body
//		$body = create_body($body);
//		for mailing purpose
//		for($i=0;$i<$cnt;$i++)
//		{
//			$to = $email['email'][$i];
//			$mesg = array('body'=>$body,'subject'=>$subject,'to'=>$to);
//			mailSend($mesg);
//		}
		
	}
	$coloums = array("subject"=>$subject,"body"=>$body,"created_on"=>$date,"signature"=>$signature);
	$rsetting->insert_announcement('announcement',$coloums);
	forward('../../view/admin/settingMenu.php');
}

function create_body($body)
	{
		$str = '';
		$str.="<html>";
		$str.="<head>";
		$str.="</head>";
		$str.="<body style=\"background-color:#E0EDF0\">";
		$str.="<p style=\"font-size:16px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">Dear Student,</p>";
		$str.="<p style=\"font-size:14px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">$body</p>";
		$str.="</body>";
		$str.="</html>";	
		return $str;
	}
?>