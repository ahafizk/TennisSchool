<?php
require_once('../../db/Database.php');
require_once('../../common/forwarding.php');
session_start();
$t1=date_parse($_SESSION['start_date']);
$t2= date_parse($_SESSION['end_date']);
$_SESSION['t2'] = $t2;
$_SESSION['t1'] = $t1;
$time1 =  mktime(0,0,0,$t1['month'],$t1['day'],$t1['year']);
$week_s  = date('W',$time1);

$time2 =  mktime(0,0,0,$t2['month'],$t2['day'],$t2['year']);
$week_e  = date('W',$time2);

if($week_s>$week_e)$total_w = 52 - $week_s + $week_e+1;
else $total_w = $week_e - $week_s+1 ;

$ws = $week_s;
$_SESSION['total_week']= $total_w;
if(($_POST['save_less']==1)&& isset($_POST['save']))
{
	
	$db = new Database();
	$coloums=array("lesson_type"=>$_SESSION['lesson_type'],"name"=>$_SESSION['lesson_name'],"start_date"=>$_SESSION['start_date'],"end_date"=>$_SESSION['end_date'],"detail_description"=>$_SESSION['description'],"num_lesson"=>$_SESSION['total_lesson'],"intented_skill"=>$_SESSION['intented_skill'],"comments"=>$_SESSION['comment'],"duration_per_lesson"=>$_SESSION['duration'],"age_group"=>$_SESSION['age_group']);
	
	$db->insert("lesson_detail" ,$coloums);
	
	$sql = sprintf("select id from lesson_detail where lesson_type='%s'and name='%s' and start_date='%s' and end_date= '%s' and num_lesson =%d",$_SESSION['lesson_type'],$_SESSION['lesson_name'],$_SESSION['start_date'],$_SESSION['end_date'],$_SESSION['total_lesson']);
	$ret= $db->process_query($sql);
	$link = $db->connect();
	$result=0;
	$i =0;
	while($row = mysql_fetch_array($ret))
	{
			
	  $result = $row['id'];
	}
	$db->disconnect($link);
	
	for($i=0;$i<$_SESSION['total_week'];$i++)
	{
		$yname = 'year'.$i;
		$wname = 'week'.$i;
		$com = 'comment'.$i;
		$coloums = array('lesson_id'=>$result,'years'=>$_POST[$yname],'weeks'=>$_POST[$wname],'comments'=>"$_POST[$com]");
		$db->insert("lesson_week" ,$coloums);
	}
	forward("../admin/levelMenu.php");
}
?>