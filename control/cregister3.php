<?php
require_once('../../model/register/Rlesson_details.php');
require_once('../../model/register/Ruser_lesson_pref.php');
require_once('../../common/forwarding.php');
session_start();
 $rlesson_detail = new Rlesson_detail();
 $lesson_detail = $rlesson_detail->get_lesson_detail_group();//();
 ///print_r($lesson_detail);
 $ruser_lesson_pref = new Ruser_lesson_pref();
 
  if(isset($_POST['register3'])&&!strcasecmp($_POST['register3'],'step3')) //it is from the page 3 request
  {
	   $_SESSION['register3'] = 'step3';
	   
	   for($i=1;$i<4;$i++)
	   {
	   		$x = 'choice'.$i;		
	  		$lesson_id = $_SESSION[$x] = $_POST[$x];
			$preference = $i;
			//$ruser_lesson_pref->insert_user_lesson_pref($user_id, $lesson_id,$preference);  
	   }
	   forward('register4.php');
  }
?>