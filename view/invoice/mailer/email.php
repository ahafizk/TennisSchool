<html>
<head>
</head>
<body>
<?php
require("class.phpmailer.php");
include "../report_gen.php";
include "../chart.php";

$filter = 0;
$final_data = "<html><head><head><body>";
	
$month = array("00","01","02","03","04","05","06","07","08","09","10","11","12");
$month_name = array("All","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
if(isset($_GET['filter']))
{
	$filter = $_GET['filter'];
}
if($filter==0)
{
	$prg = new report();
	$prg->width = "100%";
	$prg->cellpad = "0";
	$prg->cellspace = "0";
	$prg->border = "0";
	$prg->header_color = "#666666";
	$prg->header_textcolor="#FFFFFF";
	$prg->body_alignment = "left";
	$prg->body_color = "#CCCCCC";
	$prg->body_textcolor = "#800022";
	$prg->type = $filter;
	$prg->surrounded==true;
	$prg->title = "Report";
	$final_data .= $prg->exportReport();

}else 
{
	$prg = new report();
	$prg->width = "100%";
	$prg->cellpad = "0";
	$prg->cellspace = "0";
	$prg->border = "0";
	$prg->header_color = "#666666";
	$prg->header_textcolor="#FFFFFF";
	$prg->body_alignment = "left";
	$prg->body_color = "#CCCCCC";
	$prg->body_textcolor = "#800022";
	$prg->type = $filter;
	$prg->surrounded==true;
	$prg->title = "Report";
				
	if(isset($_GET['yr']))
		$prg->report_yr = $_GET['yr']; 
	if(isset($_GET['mon']))
		$prg->report_mon = $_GET['mon']; 	
	if(isset($_GET['date1']))
			$prg->date1 = $_GET['date1']; 		
	if(isset($_GET['date2']))
		$prg->date2 = $_GET['date2'];	
	if(isset($_GET['rev_date1']))
		$prg->rev_date1 = $_GET['rev_date1']; 		
	if(isset($_GET['rev_date2']))
		$prg->rev_date2 = $_GET['rev_date2'];		
		
	$final_data.="<table><tr><td>";
	$final_data.=$prg->exportReport();	
	$final_data.="</td><td>";
	
	$data = "";
	if($filter==1)
		$data = prepareChartData($prg->report_mon,$prg->report_yr);
	else
		$data = prepareChartData($filter,$prg->date1,$prg->date2);	
		
	$title = "";
	if($filter==1)
	{
		if($prg->report_mon==0)
			$title = "Report for the year ".$prg->report_yr;
		else
			$title = "Report for the month ".$month_name[$prg->report_mon];
	}else if($filter==2)
	{
		$title = "Report for the all dates below ".$prg->rev_date1;
	}else if($filter==3)
	{
		$title = "Report for the all dates above ".$prg->rev_date2;
	}else if($filter==4)
	{
		$title = "Report for the all dates between ".$prg->rev_date1." and ".$prg->rev_date2;
	}
	
	$width = calculateWidth($data);
	$height = calculateHeight($data);
	
	$outfile = "report_chart.jpg";
	drawChart($data,$title,$width,$height,$outfile);
	
	$final_url = getChartPath().$outfile;
	$final_data.= "<img src='".$final_url."'/>";
	$final_data.= "</td></tr></table>";
}
$final_data .= "</body></html>";

///First create the attachment
$file = "attachment.xls";

$f = fopen($file, "w");
if($f!=null)
{
	fwrite($f,$final_data); 
	fclose($f);
}
/// now prepare the mail and send it

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

$mail->Subject = "USB Format Tool Report";
$mail->Body    = "Please find the attached report";
///$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   	echo "Message could not be sent. <p>";
   	echo "Mailer Error: " . $mail->ErrorInfo;
}else
	echo "Message has been sent";
?>
<p></p>
<a href="../report.php" style="color:#0000FF; font-size:16px; font-weight:bold;">Go to Report Page</a>
</body>
</html>