<?php
require_once('../../common/common.php');
require_once('../../common/forwarding.php');
require_once('../../model/authorization/Rauthorization.php');
session_start();
 if(isset($_POST['save']))
 {
	 $rauth = new Rauthorization();
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];
	$initial = $_POST['initial'];
	
	$call_name = $_POST['call_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$date =  isset($_REQUEST["date1"]) ? $_REQUEST["date1"] : "";
	
	$street = $_POST['street'];
	$house_number = $_POST['house_number'];
	$post_code = $_POST['post_code'];
	$location = $_POST['location'];
	$telephone = $_POST['telephone'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$fax = $_POST['fax'];
	$ret = $rauth->get_user_name($user_name);
	$dat = date_parse($date);
	if(($dat['year']==0||$dat['month']==0||$dat['day']==0)||(strcasecmp($email,'')&&!isValidEmail($email))||strcmp($password,$repassword)||$ret>0)
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
		
		if($ret>0)$user_name ="";
		$_SESSION['user_name'] = $user_name;
		
		$_SESSION['password'] = "";
		$_SESSION['initial']= $initial;
		$_SESSION['call_name'] = $call_name;
		$_SESSION['middle_name'] = $middle_name;
		$_SESSION['last_name'] = $last_name;
		$_SESSION['gender'] = $gender;
		$_SESSION['date'] = $date;
		$_SESSION['street'] = $street;
		$_SESSION['house_number'] = $house_number;
		$_SESSION['post_code'] = $post_code;
		$_SESSION['location'] = $house_number;
		$_SESSION['telephone'] = $telephone;
		$_SESSION['mobile'] = $mobile;
		$_SESSION['email'] = $email;
		$_SESSION['fax'] = $fax;
		
		$_SESSION['invalid'] .= "!";
		forward('../../view/authorization/newuser.php');
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
		$_SESSION['location'] = "";
		$_SESSION['telephone'] ="";
		$_SESSION['mobile'] ="";
		$_SESSION['$email'] ="";
		$_SESSION['$fax'] = "";
		$coloums = array('user_name'=>$user_name,'password'=>$password,
						 'initial'=>$initial,'call_name'=>$call_name,'middle_name'=>$middle_name,
						 'last_name'=>$last_name,'street'=>$street,'house_number'=>$house_number,
						 'post_code'=>$post_code,'location'=>$location,'phone'=>$telephone,'mobile'=>$mobile,
						 'email'=>$email,'fax'=>$fax,'gender'=>$gender,'birth_date'=>$date);
		
		$rauth->insert_user("adminuser",$coloums);
		forward('../../view/admin/authorizeMenu.php');
		
	}
	
	
 }

?>