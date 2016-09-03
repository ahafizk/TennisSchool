<?php
require_once('../../model/level/Rgroup.php');
require_once('../../common/forwarding.php');
if( !strcasecmp($_POST['save'],'Save'))
{
	session_start();
	$lesson_id = $_POST['lesson_id'];
	$_SESSION['job_num'] = $_POST['job_num'];
	$_SESSION['total_trainer'] = $_POST['total_trainer'];
	$_SESSION['max_member'] = $_POST['max_member'];
	$_SESSION['explanation'] = $_POST['explanation'];
	$coloums = array("lesson_detail_id"=>$lesson_id,"max_group_member"=>$_SESSION['max_member'],"number_trainer"=>$_SESSION['total_trainer'],"explanation"=>$_SESSION['explanation'],"number_job"=>$_SESSION['job_num']);
	
	$rgroup = new Rgroup();
	$rgroup->insert_group("group_info",$coloums);
	$group_id = $rgroup->get_group_id($lesson_id,$_SESSION['max_member'],$_SESSION['total_trainer'],$_SESSION['job_num']);
	for($i=1;$i<=7;$i++)
	{
		$start = "start".$i;
		$end="end".$i;
		$location = "location".$i;
		$name ="name".$i;
		$abv = "abbriviation".$i;
		$start_time = $_POST[$start];
		$end_time = $_POST[$end];
		$loc = $_POST[$location];
		$loc_name = $_POST[$name];
		$abbreviation = $_POST[$abv];
		
		for($j=1;$j<=7;$j++)
	    {
			$day="day".$i."".$j;
			if(isset($_POST[$day]))
			{
				$colms = array("group_info_lesson_detail_id"=>$lesson_id,"group_info_id"=>$group_id,
							   "week_day"=>$_POST[$day],"start_time"=>$start_time,"end_time"=>$end_time,"location"=>$loc,
							   "name"=>$loc_name,"abbreviation"=>$abbreviation);
				$rgroup->insert_group("lesson_times",$colms);
			}
		}//end of inner for
		
	}//end of outer for
	forward('../admin/levelMenu.php');
}
?>