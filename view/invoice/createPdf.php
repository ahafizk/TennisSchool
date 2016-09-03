<?php 
require_once("pdf/make_pdf.php");
session_start();
$invoice = $_SESSION['invoice'];
//$invoice= $_POST['invoice'];
$path = "../../pdf_files/";//the pdf files path



creatPDF("../../pdf_files/html/$invoice",$invoice,"../../pdf_files/");
//creatPDF("1234.html");
//require_once('../../common/forwarding.php');
//forward('invoice1.php');
$invoice_no = $_POST['invoice_no'];	
$pdf_file_name = $invoice_no.".pdf"; 
	$client_no = $_POST['client_no'];
	$date1 = $_POST['date1'];
	//$_SESSION['date1'] = $date1;
	$user_id = $_POST['user_id'];
	$email = $_POST['email'];
?>
<html>
<body>
<form name = "c" method='POST' action='invoice1.php'>
	<input type='hidden' name='invoice_no' value='<?php echo $invoice_no;?>'>
	<input type='hidden' name='client_no' value='<?php echo $client_no;?>'>
	<input type='hidden' name='date1' value='<?php echo $date1; ?>'>
	<input type='hidden' name='user_id' value='<?php echo $user_id;?>'>
	<input type='hidden' name='file_name' value='<?php echo $pdf_file_name;?>'>
    <input type='hidden' name='path' value='<?php echo $path;?>'>
    <input type='hidden' name='email' value='<?php echo $email;?>'>
</form>
<script language="JavaScript" type="text/javascript">
	document.c.submit();
</script>
</body>
</html>