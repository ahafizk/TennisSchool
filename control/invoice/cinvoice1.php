<?php
require_once('../../model/invoice/Rinvoice.php');
$rin = new Rinvoice();
session_start();
//$user_id  = $_SESSION['user_id'];
$invoice_no = $_POST['invoice_no'];	
	$client_no = $_POST['client_no'];
	$date1 = $_POST['date1'];
	//$_SESSION['date1'] = $date1;
	$user_id = $_POST['user_id'];
	$file_name = $_POST['file_name'];
	$path = $_POST['path'];
	$email = $_POST['email'];
	echo $file_name;
	
	
$r = $rin->get_info($user_id );
$d1 = date_parse($r['start_date'][0]);
$d2 = date_parse($r['end_date'][0]);
$subtotal = ($r['tution_fees'][0]*$r['vat'][0])/100;
$total = $r['tution_fees'][0]+ $subtotal;
?>