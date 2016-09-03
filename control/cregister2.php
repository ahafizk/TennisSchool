<?php
require_once('../../model/register/Ruser_time_pref.php');

require_once('../../common/forwarding.php');

session_start();
//get_times($weekDay)
$ruser_time_pref = new Ruser_time_pref();
$_SESSION['set_time'] =0;

if(isset($_POST['register2'])&&!strcasecmp($_POST['register2'],'step2'))
{
	$_SESSION['register2'] = 'step2';
	$x = 'p_presence';
	
	for($i =1 ; $i<7; $i++) // this is for the week 1- monday, 2- thues day.
	{
		
		for($j=0;$j<24;$j++)
		{
			$index = $x.$j."_".$i; // make the index to receive the value of a check box;
			$settime = "settime".$j."_".$i;
			if(isset($_POST[$index]))
			{
				$temp = $_POST[$index];
				//$temp = explode(" ",$_POST[$index]); // because the input format is => 'SA_01012000 11:00'
				if(!$_SESSION[$set_time])
				{
					$_SESSION[$set_time] = 1;
				}
				else 
				{
					$_SESSION[$set_time] = 0;	
				}
				//$tm = explode(':',$temp[1]);
				
				//$tim = $tm[0].".".$tm[1];
				$_SESSION[$index] = $temp;
				//echo $_SESSION[$index];
				//$ruser_time_pref->insert_user_time_pref(1, $i,$_SESSION[$index]);
			}
			
		} // this is for the time 
		
	}
	header('Location: register3.php');
	//forward('register3.php'); //forward to the next page
}//end of if

function time_range($arr,$param)
{
	$cnt = count($arr[$param[0]]);
	//echo $cnt;
	$rng = array();
	$k=0;
	for($i=0;$i<$cnt;$i++)
	{
		$total = $arr[$param[1]][$i] - $arr[$param[0]][$i]; //start time to end
		$s = $arr[$param[0]][$i]*60;
		$e = $arr[$param[1]][$i]*60;
		
		for($j=$s;$j<$e;$j=$j+$arr[$param[2]][$i])
		{
			
			$rng[$k] = 	number_format((int)($j/60)+($j%60)/100,2);
			
			$k++;
		}
		if(($i+1)<$cnt&&$arr[$param[0]][$i+1]<=$arr[$param[1]][$i])$i++;
	}
	return $rng;
}
?>