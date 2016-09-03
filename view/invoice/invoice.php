<?php
require_once("../../control/invoice/cinvoice.php");
$str ='';
$str .="<html>
<head>
<meta content=\"text/html; charset=iso-8859-1\" http-equiv=Content-Type>
<meta content=\"nl\" http-equiv=\"Content-Language\">
</head>
<body leftMargin=\"0\" rightMargin=\"0\" topMargin=\"0\" marginheight=\"0\" marginwidth=\"0\" style=\"font-family: Arial; color: #000066; font-size: 10pt\" bgcolor=\"#F1F1FF\">

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
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>CLIENT NAME</b></font></td>
</tr>
<tr>
<td width=\"30\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td><td><font face=\"Arial\" size=\"6\" color=\"#000000\">CLIENT ADDRESS</font></td>
</tr>
<tr>
<td width=\"30\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td><td><font face=\"Arial\" size=\"6\" color=\"#000000\">CLIENT ZIPCODE + CITY</font></td>
</tr>
</table>
<p>&nbsp;</p>

<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" >
<tr>
<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Invoice Date</font></td>
<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">INVOICE DATE</font></td>
</tr>
<tr>
<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>Invoice Number</b>&nbsp;&nbsp;</font></td>
<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>INVOICE NUMBER</b></font></td>
</tr>
<tr>
<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Relationship Number</font></td>
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">CLIENT NUMBER</font></td>
</tr>
<tr>
<td width=\"60\"><font face=\"Arial\" size=\"6\" color=\"#000000\">Season</font></td>
<td><font face=\"Arial\" size=\"6\" color=\"#000000\">Summer Season 2007</font></td>
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
<td nowrap valign=\"top\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">CATEGORY NAME (group/individual)</font></td>
<td colspan=\"2\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td align=\"right\" valign=\"top\" nowrap ><font face=\"Arial\" size=\"6\" color=\"#000000\">&euro;&nbsp;PRICE WITHOUT TAX</font></td>
<td align=\"right\" valign=\"top\" nowrap ><font face=\"Arial\" size=\"6\" color=\"#000000\">6%</font></td>
</tr>
<tr>
<td valign=\"top\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Group</font></td>
<td nowrap valign=\"top\"><font face=\"Arial\" size=\"6\" color=\"#000000\">GROUP NUMBER</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Period</font></td>
<td nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">LESSON DATES (ie from April to October)</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td valign=\"top\" ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Match day and time</font></td>
<td nowrap valign=\"top\" colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>DAY OF LESSON</b> van <b>START TIME</b> tot END TIME; TENNIS LANE<br/>LOCATION NAME, LOCATION ADRES, LOCATION ZIPCODE + CITY</font></td>

<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Maximum students</font></td>
<td nowrap colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">CATEGORY MAXIMUM own review of trainees</font></td>
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">*&nbsp;&nbsp;Number of lessons</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>CATEGORY OF LESSONS own review</b></font></td>
<td ><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td colspan=\"2\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">Subtotal excluding VAT&nbsp;</font></td>
<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">&euro;&nbsp;PRICE WITHOUT TAX</font></td>
<td><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">Subtotal 6% VAT&nbsp;</font></td>
<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\">&euro;&nbsp;TAX (6%)</font></td>
<td><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr>
<tr>
<td colspan=\"3\"><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>TOTAL TO PAY</b>&nbsp;</font></td>
<td align=\"right\" nowrap><font face=\"Arial\" size=\"6\" color=\"#000000\"><b>&euro;&nbsp;PRICE WITH TAX</b></font></td>
<td><font face=\"Arial\" size=\"6\" color=\"#000000\">&nbsp;</font></td>
</tr></table>
<p><font face=\"Arial\" size=\"6\" color=\"#000000\">You can pay by clicking the following link: PAYMENT LINK</font></p>
</body>
</html>";

?>
<?php
$invoice = $invoice_no.".html";
$fp = fopen("../../pdf_files/html/$invoice","w+");
fwrite($fp,$str);
fclose($fp);
session_start();
$_SESSION['invoice'] = $invoice;
$_SESSION['user_id'] = $user_id;
//$file_name = $invoice;
//require_once('../../common/forwarding.php');
//forward('createPdf.php');
?>
<html>
<body>
<form name = "createPdf" method='POST' action="createPdf.php">
	<input type='hidden' name='invoice_no' value="<?php echo $invoice_no;?>"/>
	<input type='hidden' name='client_no' value="<?php echo $client_no;?>"/>
	<input type='hidden' name='date1' value="<?php echo $date1; ?>"/>
	<input type='hidden' name='user_id' value="<?php echo $user_id;?>"/>
	
    <input type="hidden" name="email" value="<?php echo $email;?>"/>
    
</form>
<script language="JavaScript" type="text/javascript">
	document.createPdf.submit();
</script>
</body>
</html>