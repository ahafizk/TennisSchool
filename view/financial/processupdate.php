<?php
require_once('../../model/financial/Rfinancial.php');
require_once('../../common/forwarding.php');
if(isset($_POST['update']))
{
	$user_id = $_POST['user_id'];
	$amount = $_POST['amount'];
	$payment_id  = $_POST['payment_id'];
	
	$status = $_POST['status'];
	//echo $payment_id;
	//echo $user_id;
	$rfinancial = new Rfinancial();
	$rfinancial->update_status($payment_id,$user_id,$status,$amount);
	forward('../admin/financialMenu.php');
}
?>