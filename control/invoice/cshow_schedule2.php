<?php 
require_once('../../model/schedule/RscheduleReport.php');
//require_once('');
if(isset($_POST['all']))
{
	$param = $_POST['all'];
	$value = $_POST['week_day'];
	$rs = new RscheduleReport();
	$record = $rs->get_scheduled_student($param,$value); // get the record
	$cntR = count($record['user_id']); // total records
}
?>