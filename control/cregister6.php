<?php
	require_once('../../model/register/Ruser.php');
	require_once('../../model/register/Raddress.php');
	require_once('../../model/register/Rsport_info.php');
	require_once('../../model/register/Ruser_time_pref.php');
	require_once('../../model/register/Rlesson_details.php');
	require_once('../../model/register/Ruser_lesson_pref.php');
	require_once('../../model/register/Ruser_partner_pref.php');
	require_once('../../model/register/Ruser_agreement.php');
	require_once('../../common/forwarding.php');
	
	session_start();
	
	$user = new Ruser();
	
	if(!strcasecmp($_SESSION['register'],'step1'))
	{
		
		$initial = $_SESSION['initial'];
		$call_name = $_SESSION['call_name'];
		$middle_name = $_SESSION['middle_name'];
		$last_name = $_SESSION['last_name'];
		
		$gender = $_SESSION['gender'];
		$date_of_birth = date('Y-m-d',strtotime($_SESSION['date_of_birth']));
		$other_detail =$_SESSION['other_detail'];
		//echo $first_name;
		
		
			$street = $_SESSION['street'];
			$house_number = $_SESSION['house_number'];
			$post_code = $_SESSION['post_code'];
			$home_palate =$_SESSION['home_palate'];
			$telephone = $_SESSION['telephone'];
			$mobile = $_SESSION['mobile'];
			$email = $_SESSION['email'];
			$fax = $_SESSION['fax'];
			
		//now insert into user talbe
		$user->insert_user($initial,$call_name,$middle_name,$last_name,$gender,$date_of_birth,$other_detail);						   
		//get the user id
		$user_id = $rs = $user->get_user_id($initial,$call_name,$last_name,$gender);
		//echo $user_id." ".$initial;
		if($rs) //if get the id then isert the address into address table
		{
			
			
			
			
			$address = new Raddress();
			$address->insert_address($user_id,$street,$house_number,$post_code,$home_palate,$telephone,$mobile,$email,$fax);
			$sport_info = new Rsport_info();
			
			
			$knl_id = $_SESSION['knl_id'];
			$bond_number = $_SESSION['bond_number'];
			$skill_single = $_SESSION['skill_single'];
			$skill_double = $_SESSION['skill_double'];
			$level_skill = $_SESSION['level_skill'];
			$_SESSION['diploma_certificate'] = $diploma_certificate = '';
			$had_tennis = $_SESSION['had_tennis'];
			$year_played = $_SESSION['year_played'];
			$year_workout = $_SESSION['year_workout'];
			$explanation = $_SESSION['explanation'];
			$sport_info->insert_sport_info($user_id,$knl_id, $bond_number,$skill_single,$skill_double,$level_skill,$diploma_certificate,$had_tennis,$year_played,$year_workout,$explanation);
		}
		
	}//complete step one.
	
	//now go for step 2
	//**********************************************************************//
	
	$ruser_time_pref = new Ruser_time_pref();

	if(!strcasecmp($_SESSION['register2'],'step2'))
	{
		 
		$x = 'p_presence';
	
		for($i =1 ; $i<7; $i++) // this is for the week 1- monday, 2- thues day.
		{
		
			for($j=1;$j<24;$j++)
			{
				$index = $x.$j."_".$i; // make the index to receive the value of a check box;
				if(isset($_SESSION[$index]))
				{
					
					$ruser_time_pref->insert_user_time_pref($user_id, $i,$_SESSION[$index]);
				}
				
			}	 // this is for the time 
		
		}
		
	}//end of if
//************************************************************************************************************
// code goes for step 3



 	$rlesson_detail = new Rlesson_detail();
 	$lesson_detail = $rlesson_detail->get_lesson_details();
 
 	$ruser_lesson_pref = new Ruser_lesson_pref();
 
  	if(!strcasecmp($_SESSION['register3'],'step3')) //it is from the page 3 request
  	{
	  	
		   for($i=1;$i<4;$i++)
		   {
		   		$x = 'choice'.$i;		
		  		$lesson_id = $_SESSION[$x];
				$preference = $i;
				$ruser_lesson_pref->insert_user_lesson_pref($user_id, $lesson_id,$preference);  
		   }
	  }

//*************************************************************************************************************
// code goes for step4

	


	$rpartner_pref = new Ruser_partner_pref();

	if(!strcasecmp($_SESSION['register4'] ,'step4'))
	{
		
		for($i=1; $i<=4; $i++)
		{
			$p1 = 'pf_wanted_as_partner'.$i; 
			$desired = $_SESSION[$p1] ;
			echo $desired;
			echo $_SESSION[$p1];
			$p2 = 'pf_call_name'.$i;
			$call_name = $_SESSION[$p2] ;
			
			$p3 = 'pf_middle_name'.$i;
			$middle_name = $_SESSION[$p3];
		
			$p4 = 'pf_last_name'.$i;
			$last_name = $_SESSION[$p4];
		
			$p5 = 'pf_sex'.$i;
			$sex = $_SESSION[$p5];
		
			$p6 = 'pf_birth_date'.$i;
			$birth_date = date('Y-m-d',strtotime($_SESSION[$p6]));
		
			$p7 = 'pf_street'.$i;
			$street = $_SESSION[$p7];
		
			$p8 = 'pf_house_number'.$i;
			$house_num = $_SESSION[$p8];
		
			$p9 = 'pf_zipcode'.$i;
			$post_code = $_SESSION[$p9];
		
			$p10 = 'pf_city'.$i;
			$location = $_SESSION[$p10];
		
			$p11 = 'pf_telephone_net'.$i;
			$telephone = $_SESSION[$p11];
		
			$p12 = 'pf_telephone_mobile'.$i;
			$mobile = $_SESSION[$p12];
		
			$p13 = 'pf_email'.$i;
			$email = $_SESSION[$p13];
			
			$p14 = 'pf_tennis_licence_number'.$i;
			$bond_num = $_SESSION[$p14];
		
			$p15 = 'pf_pcy_code'.$i;
			$level_skill = $_SESSION[$p15];
		
			if(strcasecmp($call_name,'')&&strcasecmp($last_name,''))
			{
				
				$rpartner_pref-> insert_user_partner_pref($user_id,$desired,$call_name,$middle_name,$last_name,$sex,$birth_date,$street,$house_num,$post_code,$location,$telephone,$mobile,$email,$bond_num,$level_skill);	
			}
		
		}
	}//end of if
	
//*****************************************************************************************************************/

// here code goes for step 5;

	$ragreement = new Ruser_agreement();
	if(!strcasecmp($_SESSION['register5'],'Register'))
	{
		 
		$provision_accept = $_SESSION['p_agree_conditions_1'];
		$email_accept= $_SESSION['p_agree_electronic_com_1'];
		$debit_collection= $_SESSION['p_collection_allowed_1'];
		$bank_acc_no= $_SESSION['p_bank_account_number_1'];
		$location = $_SESSION['p_bank_account_owner_name_1'];
		$other_name= $_SESSION['p_dbtr_name_1'];
		$email= $_SESSION['p_dbtr_email_1'];
		$street= $_SESSION['p_dbtr_street_1'];
		$house_num= $_SESSION['p_dbtr_house_number_1'];
		$post_code= $_SESSION['p_dbtr_zipcode_1'];
		$other_location= $_SESSION['p_dbtr_city_1'];
		$note = $_SESSION['p_remark'];
	
		$ragreement->insert_agreement($user_id, $provision_accept,$email_accept,$debit_collection,$bank_acc_no,$location,$other_name,$email,$street,$house_num,$post_code,$other_location,$note);
	
	}//end of step five
	
	//now send mails
	$body = create_body();
	$subject = "Registration confirmation";
	$to = $_SESSION['email'];
	$mesg = array('body'=>$body,'subject'=>$subject,'to'=>$to);
	$name = $_SESSION['initial']." ".$_SESSION['call_name']." ".$_SESSION['middle_name']." ".$_SESSION['last_name'];
//	mailSend($mesg,$name);//send mail successfully
	
	function create_body()
	{
		$str.="<html>";
		$str.="<head>";
		$str.="</head>";
		$str.="<body style=\"background-color:#E0EDF0\">";
		$str.="<p style=\"font-size:16px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">Dear Student,</p>";
		$str.="<p style=\"font-size:14px;
	font-family:'Comic Sans MS', cursive;
	color:#007D99;\">&nbsp;&nbsp;Thanks for your registration. You will receive a mail when you are scheduled.</p>";
		$str.="</body>";
		$str.="</html>";	
		return $str;
	}
	
?>