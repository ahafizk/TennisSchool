<?php
require_once('../../common/common.php');
require_once('../../common/forwarding.php');
require_once('../../model/student/Rstudent.php');
session_start(); 
 if(isset($_POST['Search']))
 {
	$initial = $_POST['initial'];
	
	$call_name = $_POST['call_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$date =  isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
	$dat  = date_parse($date);
	$flag = false;
	$val = array();
	
	if(strcasecmp($initial,''))
	{
		$val[0] = $initial;
		$flag = true;
	}
	else $val[0]='';
	
	if(strcasecmp($call_name,''))
	{
		$val[1] = $call_name;
		$flag = true;
	}
	else $val[1]='';
	
	
	if(strcasecmp($middle_name,''))
	{
		$val[2] = $middle_name;
		$flag = true;
	}
	else $val[2]='';
	
	
	if(strcasecmp($last_name,''))
	{
		$val[3] = $last_name;
		$flag = true;
	}
	else $val[3]='';
	
	
	if(strcasecmp($gender,''))
	{
		$val[4] = $gender;
		
	}
	else $val[4]='';
	
	if($dat['year']!=0&&$dat['month']!=0&&$dat['day']!=0)
	{
		$val[5] = $date;
		$flag = true;
	}
	else $val[5]='';
	//print_r($val);
	if(!$flag)
	{
		$_SESSION['data']='No Data Found. Do you want to search Again!';
		
		//forward to the search page 
		forward('../../view/student/searchstudent.php?s=c');
	}
	else 
	{
		//do the query and put it to session and go to the editstudent.php
		$rstudent = new Rstudent();
		
		$user = $rstudent->get_user_info($val); // got the info for update
		//print_r($user);
		$_SESSION['data'] ="";
		if(count($user['id'])<=0)
		{
			$_SESSION['data']='No Data Found. Do you want to search Again!';
			forward('../../view/student/searchstudent.php?s=c');	
		}
	}
 }//end of if
?>