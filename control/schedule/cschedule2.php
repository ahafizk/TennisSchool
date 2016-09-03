<?php 
require_once('../../model/schedule/RscheduleReport.php');

$day = array(1=>'Monday',2=>'Tuesday',3=>'Wednesday',4=>'Thusday',5=>'Friday',6=>'Saturday',7=>'Sunday');
	/*require_once('../../model/schedule/Rschedule.php');
	$day = array(1=>'Monday',2=>'Tuesday',3=>'Wednesday',4=>'Thusday',5=>'Friday',6=>'Saturday',0=>'Sunday');
	$rschedule = new Rschedule();
	
	$lesson_type = $_GET['les'];
	
	$schedule_day_time = $rschedule->get_day_location_time($lesson_type);
	
	$week_days = 		$rschedule->get_week_day($lesson_type);
	$cntWeekDays = count($week_days['week_day']);
	
	for($i=0;$i<$cntWeekDays;$i++)
	{
		$week_day = $week_days['week_day'][$i];
		//echo $week_day;
		$week_time = $rschedule->get_week_time($lesson_type,$week_day);	
		echo count($week_time['location']);
		
	}*/
	$report = new RscheduleReport();
	$loc = $report->select_location();
	$cntLoc = count($loc['location']);
	
	if(isset($_POST['Get'])&& !strcasecmp($_POST['Get'],'Get'))
	{
		$week_day  = $_POST['week_day'];
		$location = $_POST['location'];
		
		$_SESSION['location'] = $location;
		
	}
	else if(isset($_POST['move'])&& !strcasecmp($_POST['move'],'move'))
	{
			
	}
	else if(isset($_POST['remove'])&& !strcasecmp($_POST['remove'],'remove'))
	{
		echo 'hi';
	}
	else if(isset($_POST['show'])&& !strcasecmp($_POST['show'],'Show Detail'))
	{
		echo 'hi';
	}
	
	
?>