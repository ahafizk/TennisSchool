<?php
	require_once('../../model/register/Ruser.php');
	require_once('../../model/register/Raddress.php');
	require_once('../../model/register/Rsport_info.php');
	require_once('../../common/forwarding.php');
	//$user = new Ruser();
	session_start();
	if(isset($_POST['register'])&& !strcasecmp($_POST['register'],'step1'))
	{
		$_SESSION['register'] = 'step1';
		
		$initial = $_SESSION['initial'] = $_POST['initial'];
		$call_name = $_SESSION['call_name'] = $_POST['call_name'];
		$middle_name = $_SESSION['middle_name'] = $_POST['middle_name'];
		$last_name = $_SESSION['last_name'] = $_POST['last_name'];
		
		$gender = $_SESSION['gender'] = $_POST['gender'];
		$date_of_birth = $_SESSION['date_of_birth'] = $_POST['date_of_birth'];
		$other_detail =$_SESSION['other_detail'] =  $_POST['other_detail'];
		//echo $first_name;
		if(!strcasecmp($initial,'')||!strcasecmp($call_name,'')||!strcasecmp($last_name,'')||!strcasecmp($gender,''))
		{
//			echo "hi";
			header('register.php');
			//forward('register.php');
		}
		
			$street = $_SESSION['street'] =$_POST['street'];
			$house_number = $_SESSION['house_number'] =  $_POST['house_number'];
			$post_code = $_SESSION['post_code'] = $_POST['post_code'];
			$home_palate =$_SESSION['home_palate'] =  $_POST['home_palate'];
			$telephone = $_SESSION['telephone'] = $_POST['telephone'];
			$mobile = $_SESSION['mobile'] = $_POST['mobile'];
			$email = $_SESSION['email'] = $_POST['email'];
			$fax = $_SESSION['fax'] = $_POST['fax'];
			if(!isValidEmail($email)&& strcasecmp($email,''))
			{
				
				forward('register.php');
			}
			else if(!strcasecmp($street,'')||!strcasecmp($house_number,'')||!strcasecmp($post_code,'')||!strcasecmp($home_palate,'')||!strcasecmp($email,''))
			{
//				echo "hi";
				forward('register.php');
			}
		
		//$user->insert_user($initial,$call_name,$middle_name,$last_name,$gender,$date_of_birth,$other_detail);						   
		//$rs = $user->get_user_id($initial,$call_name,$last_name,$gender);
		
		if($rs) //if get the id then isert the address into address table
		{
			$id = $rs;
			
			
			$user_id = $rs;
			//$address = new Raddress();
			//$address->insert_address($user_id,$street,$house_number,$post_code,$home_palate,$telephone,$mobile,$email,$fax);
			//$sport_info = new Rsport_info();
			
			$user_id = $rs;
			$knl_id = $_SESSION['knl_id'] = $_POST['knl_id'];
			$bond_number = $_SESSION['bond_number'] = $_POST['bond_number'];
			$skill_single = $_SESSION['skill_single'] = $_POST['skill_single'];
			$skill_double = $_SESSION['skill_double'] = $_POST['skill_double'];
			$level_skill = $_SESSION['level_skill'] = $_POST['level_skill'];
			$_SESSION['diploma_certificate'] = $diploma_certificate = '';
			$had_tennis = $_SESSION['had_tennis'] = $_POST['had_tennis'];
			$year_played = $_SESSION['year_played'] = $_POST['year_played'];
			$year_workout = $_SESSION['year_workout'] = $_POST['year_workout'];
			$explanation = $_SESSION['explanation'] = $_POST['explanation'];
			//$sport_info->insert_sport_info($user_id,$knl_id, $bond_number,$skill_single,$skill_double,$level_skill,$diploma_certificate,$had_tennis,$year_played,$year_workout,$explanation);
		}
		header('Location: register2.php');
		//forward('../register/register2.php');
	}
	
	function isValidEmail($email){
	return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}
?>