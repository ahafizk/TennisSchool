<?php
require_once('../../model/schedule/RscheduleReport.php');
require_once('../../model/schedule/Rschedule.php');
$day = array(1=>'Monday',2=>'Tuesday',3=>'Wednesday',4=>'Thusday',5=>'Friday',6=>'Saturday',7=>'Sunday');
$report = new RscheduleReport();
$rschedule = new Rschedule();
session_start();
 $loc = $_SESSION['loc'];
 
 $cntLoc = count($loc['location']);
 $arr = array();
 $cntU = 0;
 for($i=0;$i<$cntLoc;$i++)
 {
 	$tm = 'time'.$i;
 	$time = $_SESSION[$tm];
 	$cntTm = count($time['start_time']);
 	for($j=0;$j<$cntTm;$j++)
 	{
		 $dt = 'data'.$j;
		 $data = $_SESSION[$dt];
		 $cntD = count($data['call_name']);
		 for($k=0;$k<$cntD;$k++)
		 {
			 $name = 'checkbox'."".$i."".$j."".$k;
			 if(isset($_POST[$name]))
			 {
				 $val = explode(',',$_POST[$name]);
				 
				 $arr[$cntU]['lu'] = $val[0];
				 $arr[$cntU]['ui'] = $val[1];
				 $arr[$cntU]['call_name'] = $data['call_name'][$k];
				 $arr[$cntU]['last_name'] = $data['last_name'][$k];
				 $arr[$cntU]['initial'] = $data['initial'][$k];
				$cntU++;	 
			 }
		 }
 	}
 }
 print_r($arr);
 if(isset($_POST['Get'])&& !strcasecmp($_POST['Get'],'Get'))
 {
	$user_id = $_POST['id'];
	$_SESSION['user_id'] = $user_id;
	$user = $report->get_user_name($user_id);
	print_r($user);
	//$rschedule->make_user_time_range($week_day,$user_id);
 }
 
 //print_r($_SESSION['time1']);
?>