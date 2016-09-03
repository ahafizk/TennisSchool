<?php
require_once('../../model/financial/Rfinancial.php');
$rfinance = new Rfinancial();
if(isset($_POST['next']))
{
	$user_id = $_POST['user_id'];
	//echo $user_id;	
	//echo 'hi';
	$record = $rfinance->get_user_status($user_id);
}
//
?>