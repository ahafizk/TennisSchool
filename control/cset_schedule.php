<?php
require_once('../../model/register/Rschedule.php');
require_once('../../model/register/Rgroups.php');
require_once('../../model/register/Ruser.php');
require_once('../../model/register/Raddress.php');
require_once('../../model/register/Ruser_group.php');
require_once('../../common/forwarding.php');
$ruser_group = new Ruser_group();
$rgroup = new Rgroups();
$group = $rgroup->get_groups();
//print_r($group);
$cnt = count($group['id']);
//echo $group[''][0];
//echo $group['id'][0];
 
$_SESSION['user_id'] = $user_id = $_POST['user_id'];
$raddress = new Raddress();
$address = $raddress->get_address_by_id($user_id);

$ruser = new Ruser();
$user = $ruser->get_user_by_id($user_id);
//print_r($user);

if(isset($_POST['schedule'])&& !strcasecmp($_POST['schedule'],'redden'))
{
	$rschedule = new Rschedule();
	$user_id = $_POST['user_id'];
	for($i=0;$i<7;$i++)
	{
		$x = $i+1;
		$yr = 'year'.$x;
		$years = $_POST[$yr];
		$wk = 'week'.$x;
		$week = $_POST[$wk];
		$st = "start_date".$x;
		$start_date = $_POST[$st];
		$ed = "end_date".$x;
		$end_date = $_POST[$ed];
		$ls = "les".$x;
		$les_vij = $_POST[$ls];
		 $_SESSION['group_id']=$group_id = $_POST['group_id'];
		// provide group_id
		if(strcasecmp($years,'')&&strcasecmp($week,''))
		{
		 //$ret = $rschedule->insert_week($years, $week,$start_date,$end_date,$les_vij,$group_id);
		//$week_id = $rschedule->get_week_id($years, $week,$start_date,$end_date,$les_vij,$group_id);
		//echo $week_id;
		}
		$str = "start".$x;
		$start_time = $_POST[$str];
		$en = "end".$x;
		$end_time = $_POST[$en];
		$lc = "location".$x;
		$location = $_POST[$lc];
		$nm = "name".$x;
		$name = $_POST[$nm];
		$ab = "abbriviation".$x;
		$abbreviation = $_POST[$ab];
				
		for($j=0;$j<7;$j++)
		{
			$y = $j+1;
			$dy = "day".$x."".$y;
			if(isset($_POST[$dy]))
			{
				$week_day = $y; //should provide group_id and week_id
				//$rschedule->insert_day_time($week_day, $start_time,$end_time,$location,$name,$abbreviation,$group_id,$week_id);
			}
			
		}//end of inner for
		
	}//end of outer for
	$ruser->set_active_user(1);
	$ruser_group->insert_user_group($_SESSION['user_id'],$_SESSION['group_id']);
	if($ret)forward('../register/voucher_email.php');
}
?>