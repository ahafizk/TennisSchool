<?php
require_once('../../model/financial/Rfinancial.php');
{
	$rfinancial = new Rfinancial();
	
	$record = $rfinancial->get_user_payment();
	$cnt = count($record['user_id']);
	//echo $record['user_id'][0];
	//print_r($record);
	
}
?>