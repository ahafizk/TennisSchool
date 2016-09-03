<?php
require_once('../../model/register/Rgroups.php');
require_once('../../model/register/Rlesson.php');
//require_once();

 // now get the lessona
 $rlesson = new Rlesson();
 $lesson_name_id = $rlesson->get_lesson_id_name(); //get the lessons
 //print_r($lesson_name_id);
 $countLess = count($lesson_name_id); 

 
	if(isset($_POST['new_group'])&& !strcasecmp($_POST['new_group'],'Groep maken'))
	{
		$group_id =$_POST['group_id'];
		$group_name =$_POST['group_name'];
		$lesson_id = $_POST['lesson_id'];
		$total_member =$_POST['total_member'];
		$available_member = $_POST['available_member'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$day1 = $_POST['day1'];
		$month1 = $_POST['month1'];
		$year1 = $_POST['year1'];
		$start_date = $year."-".$month."-".$day;
		$end_date = $year1."-".$month1."-".$day1;
		$rgroups = new Rgroups();
		$ret = $rgroups->insert_groups($group_id,$group_name,$total_member,$available_member,$start_date,$end_date,$user_id,$lesson_id);
		//if($ret)echo "successfull";
    }
?>