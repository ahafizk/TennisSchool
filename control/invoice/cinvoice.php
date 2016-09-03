<?php
//echo $_POST['sinvoice'];
if(isset($_POST['sinvoice']))
{
	session_start();
	$invoice_no = $_POST['invoice_no'];	
	$client_no = $_POST['client_no'];
	$date1 = $_POST['date1'];
	$_SESSION['date1'] = $date1;
	$user_id = $_POST['user_id'];
	//$file_name = $_POST['file_name'];
	//$path = $_POST['path'];
	$email = $_POST['email'];
	//echo $email;
	$_SESSION['user_id']=$user_id;
	//echo $invoice_no;
	//echo $client_no;
	//echo "hi";
}

?>