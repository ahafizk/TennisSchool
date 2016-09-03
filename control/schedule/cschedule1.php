<?php
//require_once('../../model/schedule/group_users.php');
//require_once('../../model/register/Rlesson_details.php');
require_once('../../model/schedule/RscheduleReport.php');
session_start();
	/*$rlesson_details = new Rlesson_detail();

	$lesson_detail = $rlesson_details->get_lesson();
	$total_lesson = count($lesson_detail['lesson_type']);
	//echo $total_lesson;
	$rgroup_users = new Group_users();
	for($i=0;$i<$total_lesson;$i++)
	{
		//echo "<br/>".$lesson_detail['lesson_type'][$i]."<br/>";
		$group_user = $rgroup_users->get_users_by_group($lesson_detail['lesson_type'][$i],$lesson_detail['member'][$i]);
		//
	}
	*/

	$report = new RscheduleReport();
	
	
	
	
	if(isset($_POST['Get'])&& !strcasecmp($_POST['Get'],'Get'))
	{
		$week_day  = $_POST['week_day'];
		$loc = $report->get_distinct_location($_POST['week_day']);
		$_SESSION['loc'] = $loc;
		//print_r($_SESSION['loc']);
		//print_r($a);
		//$data = $report->get_day_wise_report($week_day,'LES4');
		//print_r($data);
		//$time = $report->get_distinct_time(1,'LES4');
		$cntLoc = count($loc['location']);
		//echo $cntLoc;
		//$cntTm = count($time['start_time']);
		//echo $cntTm;
		//echo "<br/>";
		//print_r($b);
		//$cntD = count($data['location']);
		///print_r($data);
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
	

function age($age)
{
    $date = date_parse($age);
	
    $year_diff  = date("Y") - $date['year'];
    $month_diff = date("m") - $date['month'];
    $day_diff   = date("d") - $date['day'];
    if ($day_diff < 0 || $month_diff < 0)
      $year_diff--;
    return $year_diff;
  }
//print_r($group_user);
?>