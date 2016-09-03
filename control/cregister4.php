<?php
require_once('../../model/register/Ruser_partner_pref.php');
require_once('../../common/forwarding.php');
session_start();
$rpartner_pref = new Ruser_partner_pref();

if(isset($_POST['register4'])&&!strcasecmp($_POST['register4'],'step4'))
{
	$_SESSION['register4'] = 'step4';
	
	for($i=1; $i<=4; $i++)
	{
		$p1 = 'pf_wanted_as_partner'.$i;
		//echo $p1;
		$desired = $_POST[$p1];
		$_SESSION[$p1] = $desired;
		
		$p2 = 'pf_call_name'.$i;
		$call_name = $_POST[$p2];
		$_SESSION[$p2] = $call_name ;
		
		$p3 = 'pf_middle_name'.$i;
		$middle_name = $_POST[$p3];
		$_SESSION[$p3] = $middle_name;
		
		$p4 = 'pf_last_name'.$i;
		$last_name = $_POST[$p4];
		$_SESSION[$p4] = $last_name;
		
		$p5 = 'pf_sex'.$i;
		$sex = $_POST[$p5];
		$_SESSION[$p5] = $sex;
		
		$p6 = 'pf_birth_date'.$i;
		$birth_date = $_POST[$p6];
		$_SESSION[$p6] = $birth_date;
		
		$p7 = 'pf_street'.$i;
		$street = $_POST[$p7];
		$_SESSION[$p7] = $street;
		
		$p8 = 'pf_house_number'.$i;
		$house_num = $_POST[$p8];
		$_SESSION[$p8] = $house_num;
		
		$p9 = 'pf_zipcode'.$i;
		$post_code = $_POST[$p9];
		$_SESSION[$p9] = $post_code;
		
		$p10 = 'pf_city'.$i;
		$location = $_POST[$p10];
		$_SESSION[$p10] = $location ;
		
		$p11 = 'pf_telephone_net'.$i;
		$telephone = $_POST[$p11];
		$_SESSION[$p11] = $telephone;
		
		$p12 = 'pf_telephone_mobile'.$i;
		$mobile = $_POST[$p12];
		$_SESSION[$p12] = $mobile;
		
		$p13 = 'pf_email'.$i;
		$email = $_POST[$p13];
		$_SESSION[$p13] = $email;
		
		$p14 = 'pf_tennis_licence_number'.$i;
		$bond_num = $_POST[$p14];
		$_SESSION[$p14] = $bond_num;
		
		$p15 = 'pf_pcy_code'.$i;
		$level_skill = $_POST[$p15];
		$_SESSION[$p15] = $level_skill;
		//if(strcasecmp($call_name,'')&&strcasecmp($last_name,''))
		{
			forward('register5.php');
			//$rpartner_pref-> insert_user_partner_pref($user_id,$desired,$call_name,$middle_name,$last_name,$sex,$birth_date,$street,$house_num,$post_code,$location,$telephone,$mobile,$email,$bond_num,$level_skill);	
		}
		
	}
}
?>