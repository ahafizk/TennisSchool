<?php
require_once('../../common/common.php');
require_once('../../common/forwarding.php');
require_once('../../model/student/Rstudent.php');
session_start();
 if(isset($_POST['save']))
 {
	$initial = $_POST['initial'];
	
	$call_name = $_POST['call_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$date =  isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
	
	$street = $_POST['street'];
	$house_number = $_POST['house_number'];
	$post_code = $_POST['post_code'];
	$home_palate = $_POST['home_palate'];
	$telephone = $_POST['telephone'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$fax = $_POST['fax'];
	$knl_id = $_POST['knl_id'];
	$bond_number = $_POST['bond_number'];
	$skill_single = $_POST['skill_single'];
	$skill_double = $_POST['skill_double'];
	$comment = $_POST['comment'];
	$dat = date_parse($date);
	if(($dat['year']==0||$dat['month']==0||$dat['day']==0)||(strcasecmp($email,'')&&!isValidEmail($email)))
	{
		
		//print_r($dat);
		$_SESSION['invalid'] = "Invalid ";
		if(($dat['year']==0||$dat['month']==0||$dat['day']==0))
		{
			$_SESSION['invalid'] .= "Date ";	
		}
		if(strcasecmp($email,'')&&!isValidEmail($email))
		{
			$_SESSION['invalid'] .= "Email ";		
		}
		$_SESSION['initial']= $initial;
		$_SESSION['call_name'] = $call_name;
		$_SESSION['middle_name'] = $middle_name;
		$_SESSION['last_name'] = $last_name;
		$_SESSION['gender'] = $gender;
		$_SESSION['date'] = $date;
		$_SESSION['street'] = $street;
		$_SESSION['house_number'] = $house_number;
		$_SESSION['post_code'] = $post_code;
		$_SESSION['home_palate'] = $home_palate;
		$_SESSION['telephone'] = $telephone;
		$_SESSION['mobile'] = $mobile;
		$_SESSION['$email'] = $email;
		$_SESSION['$fax'] = $fax;
		$_SESSION['$knl_id'] = $knl_id;
		$_SESSION['$bond_number'] = $bond_number;
		$_SESSION['$skill_single'] = $skill_single;
		$_SESSION['$skill_double'] =$skill_double;
		$_SESSION['$comment'] = $comment;
		$_SESSION['invalid'] .= "!";
		forward('../../view/student/newstudent1.php');
	}
	else 
	{
		$_SESSION['invalid'] ="";
		$_SESSION['initial']="";
		$_SESSION['call_name'] = "";
		$_SESSION['middle_name'] ="";
		$_SESSION['last_name'] = "";
		$_SESSION['gender'] = "";
		$_SESSION['date'] = "";
		$_SESSION['street'] = "";
		$_SESSION['house_number'] = "";
		$_SESSION['post_code'] = "";
		$_SESSION['home_palate'] = "";
		$_SESSION['telephone'] ="";
		$_SESSION['mobile'] ="";
		$_SESSION['$email'] ="";
		$_SESSION['$fax'] = "";
		$_SESSION['$knl_id'] = "";
		$_SESSION['$bond_number'] = "";
		$_SESSION['$skill_single'] ="";
		$_SESSION['$skill_double'] ="";
		$_SESSION['$comment'] = "";
		$rstudent = new Rstudent();
		$rstudent->insert_user($initial,$call_name,$middle_name,$last_name, $gender,$date,$comment);
		$user_id = $rstudent->get_user_id($initial,$call_name,$last_name,$gender);
		if($user_id)
		{
			if($user_id!=0)
			{
				$rstudent->insert_address($user_id,$street, $house_number,$home_palate,$post_code,$telephone,$mobile,$email,$fax);	
				$rstudent->insert_sport_info($user_id,$knl_id, $bond_number,$skill_single,$skill_double,"","",0,0,0,"");			
				forward('../../view/admin/studentMenu.php');
			}
		}
	}
	
	
 }

?>