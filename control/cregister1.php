<?php
	require_once('../../model/register/Ruser.php');
	require_once('../../model/register/Raddress.php');
	require_once('../../model/register/Rsport_info.php');
	require_once('../../common/forwarding.php');
	$user = new Ruser();
	$user_name = $_POST['user_name1'];
	$ret = $user->get_user_name($user_name);
	if($ret) forward('register.php?rs=1');
	if(isset($_POST['register'])&& !strcasecmp($_POST['register'],'Register'))
	{
		$title = $_POST['title'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$nick_name = $_POST['nick_name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$user_name1 = $_POST['user_name1'];
		$password1 = $_POST['password1'];
		$password_re1 = $_POST['password_re1'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year =$_POST['year'];
		$date = $year."-".$month."-".$day; // make the date
		//echo $first_name;
		$start_time = $_POST['hr1'].".".$_POST['min1'];
		$end_time = $_POST['hr2'].".".$_POST['min2'];
		
		$user->insert_user($title,$first_name,$last_name, $nick_name,$gender,$user_name1,$password1,$start_time,$end_time,$date);						   
		$rs = $user->get_user_id($first_name,$last_name,$user_name1,$password1);
		
		if($rs) //if get the id then isert the address into address table
		{
			$id = $rs;
			$street = $_POST['street'];
			$house_number = $_POST['house_number'];
			$post_code = $_POST['post_code'];
			$home_palate = $_POST['home_palate'];
			$telephone = $_POST['telephone'];
			$mobile = $_POST['mobile'];
			$email = $_POST['email'];
			$fax = $_POST['fax'];
			
			$address = new Raddress();
			$address->insert_address($id,$street,$house_number,$post_code,$home_palate,$telephone,$mobile,$email,$fax);
			$sport_info = new Rsport_info();
			
			$user_id = $rs;
			$knl_id = $_POST['knl_id'];
			$bond_number = $_POST['bond_number'];
			$skill_single = $_POST['skill_single'];
			$skill_double = $_POST['skill_double'];
			$level_skill = $_POST['level_skill'];
			$diploma_certificate = $_POST['diploma_certificate'];
			$had_tennis = $_POST['had_tennis'];
			$year_played = $_POST['year_played'];
			$year_workout = $_POST['year_workout'];
			$explanation = $_POST['explanation'];
			$sport_info->insert_sport_info($user_id,$knl_id, $bond_number,$skill_single,$skill_double,$level_skill,$diploma_certificate,$had_tennis,$year_played,$year_workout,$explanation);
		}
		forward('../register/index.php');
	}
?>