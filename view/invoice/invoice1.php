<?php
require_once("../../control/invoice/cinvoice1.php");
require_once('../../common/common.php');
?>
<html>
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
<meta content="nl" http-equiv="Content-Language">
</head>
<body leftMargin="0" rightMargin="0" topMargin="0" marginheight="0" marginwidth="0" style="font-family: Arial; color: #000066; font-size: 10pt" bgcolor="#F1F1FF">

<table  border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td width="30%" align="left" valign="top">LOGO TENNIS SCHOOL</td>
<td width="40%" align="center" valign="top"><font face="Arial" size="3" color="#000000"><b>TENNIS SCHOOL NAME </b></font><br/><font face="Arial" size="2" color="#000000">TENNIS SCHOOL ADDRESS </font><br/><font face="Arial" size="2" color="#000000">PHONE AND FAX NUMBER SCHOOL </font>
<br/><font face="Arial" size="2" color="#000000">SCHOOL EMAIL ADDRESS</font></td><td width="30%" nowrap align="right" valign="top"><font face="Arial" size="4" color="#000000"><b>INVOICE</b></font></td>
</tr>
</table>

<hr size="4" color="#000066"/>

<p>&nbsp;</p>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top"><font face="Arial" size="2" color="#000000">To:&nbsp;&nbsp;</font></td>
<td><font face="Arial" size="2" color="#000000"><b><?php echo $r['initial'][0]." ".$r['first_name'][0]." ".$r['middle_name'][0]." ".$r['last_name'][0]; ?></b></font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">&nbsp;</font></td><td><font face="Arial" size="2" color="#000000"><?php echo $r['street'][0]." , ".$r['house_number'][0]; ?></font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">&nbsp;</font></td><td><font face="Arial" size="2" color="#000000"><?php echo $r['post_code'][0].", ".$r['home_plate'][0]; ?></font></td>
</tr>
</table>

<p>&nbsp;</p>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td><font face="Arial" size="2" color="#000000">Invoice Date</font></td>
<td><font face="Arial" size="2" color="#000000"><?php echo $date1; ?></font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000"><b>Invoice Number</b>&nbsp;&nbsp;</font></td>
<td><font face="Arial" size="2" color="#000000"><b><?php echo $invoice_no; ?></b></font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">Relationship Number</font></td>
<td><font face="Arial" size="2" color="#000000"><?php echo $client_no; ?></font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">Season</font></td>
<td><font face="Arial" size="2" color="#000000">--</font></td>
</tr>
</table>

<p>&nbsp;</p><table border="0" cellspacing="3" cellpadding="0" width="100%" bgcolor="#E1E1E1">
<tr>
<td colspan="3"><font face="Arial" size="1" color="#000000">Description</font></td>
<td><font face="Arial" size="1" color="#000000">&nbsp;</font></td>
<td align="right"><font face="Arial" size="1" color="#000000">Rate</font></td>
<td align="right"><font face="Arial" size="1" color="#000000">VAT</font></td>
</tr>
<tr><td colspan="6"><font face="Arial" size="2" color="#000000"><b>Lesson / Training</b></font></td>
</tr>
<tr><td colspan="6"><font face="Arial" size="2" color="#000000"><b>TRAINEE NAME</b> student concerns.</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial" size="2" color="#000000">*</font></td>
<td nowrap valign="top"><font face="Arial" size="2" color="#000000">Type</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000"><?php echo $r['lesson_type'][0]; ?></font></td>
<td align="right" valign="top" nowrap><font face="Arial" size="2" color="#000000">&euro;&nbsp;<?php echo $r['tution_fees'][0]; ?></font></td>
<td align="right" valign="top" nowrap><font face="Arial" size="2" color="#000000"><?php echo $r['vat'][0]; ?>%</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial" size="2" color="#000000">*</font></td>
<td nowrap valign="top"><font face="Arial" size="2" color="#000000">Group</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000"><?php echo $r['group_num'][0]; ?></font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">*</font></td>
<td nowrap><font face="Arial" size="2" color="#000000">Period</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000"><?php echo "from <b>".$months[$d1['month']]."</b> to <b>".$months[$d2['month']]."<b>";?></font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
</tr>
<tr>
<td valign="top"><font face="Arial" size="2" color="#000000">*</font></td>
<td nowrap valign="top"><font face="Arial" size="2" color="#000000">Match day and time</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000"><b><?php echo $weekDay[$r['week_day'][0]];?></b> of <b><?php echo $r['start_time'][0]; ?></b> until <?php echo $r['end_time'][0]; ?>; <?php echo $r['location'][0]; ?><br/><?php echo $r['location_name'][0]; ?>, LOCATION ADRES, LOCATION ZIPCODE + CITY</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">*</font></td>
<td nowrap><font face="Arial" size="2" color="#000000">Maximum students</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000"><?php echo $r['max_member'][0]; ?></font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
</tr>
<tr>
<td><font face="Arial" size="2" color="#000000">*</font></td>
<td nowrap><font face="Arial" size="2" color="#000000">Number of lessons</font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000"><b><?php echo $r['num_lesson'][0]; ?></b></font></td>
<td colspan="2"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
</tr>
<tr>
<td colspan="3"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
<td align="right" nowrap><font face="Arial" size="2" color="#000000">Subtotal excluding VAT&nbsp;</font></td>
<td align="right" nowrap><font face="Arial" size="2" color="#000000">&euro;&nbsp;<?php echo $r['tution_fees'][0]; ?></font></td>
<td><font face="Arial" size="2" color="#000000">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
<td align="right" nowrap><font face="Arial" size="2" color="#000000">Subtotal 6% VAT&nbsp;</font></td>
<td align="right" nowrap><font face="Arial" size="2" color="#000000">&euro;&nbsp;<?php echo $subtotal;?></font></td>
<td><font face="Arial" size="2" color="#000000">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><font face="Arial" size="2" color="#000000">&nbsp;</font></td>
<td align="right" nowrap><font face="Arial" size="2" color="#000000"><b>TOTAL TO PAY</b>&nbsp;</font></td>
<td align="right" nowrap><font face="Arial" size="2" color="#000000"><b>&euro;&nbsp;<?php echo $total; ?></b></font></td>
<td><font face="Arial" size="2" color="#000000">&nbsp;</td>
</tr></table>

<p><font face="Arial" size="2" color="#000000">You can pay by clicking the following link: PAYMENT LINK</font></p>
<form name="form2" action="invoiceMail.php" method="post">
<input type="hidden" name="file_name" value="<?php echo $file_name; ?>"/>
<input type="hidden" name="path" value="<?php echo $path; ?>"/>
<input type="hidden" name="email" value="<?php echo $email; ?>"/>
<p><font face="Arial" size="2" color="#000000">To send Email:</font>

<input type="submit" name="send" value="sendMail"/>
</form>
</body>
</html>

<?php
//$invoice = $invoice_no.".html
//$fp = fopen("$invoice","w+");
//fwrite($fp,$str1);
//fclose($fp);
//session_start();
//$_SESSION['invoice'] = $invoice;
//require_once('../../common/forwarding.php');
//forward('createPdf.php');
?>