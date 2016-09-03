<?php
//require_once('../../db/Database.php');
require_once('../../db/Database.php');
class RscheduleReport
{
	private $db;
	function RscheduleReport()
	{
		$this->db = new Database();
	}//end of constructor
	
	function get_user_name($user_id)
	{
		$sql = sprintf("select call_name, initial, middle_name,last_name from user where id = %d",$user_id);
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		echo $sql;
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['initial'][$i] = $row['initial'];
			$result['call_name'][$i] = $row['call_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['last_name'][$i] = $row['last_name'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function select_location()
	{
		$sql = "select 
				distinct(lu.location_name),
				lu.location
				from look_up lu
				order by location
				";
				
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			//$result['start_time'][$i] = $row['start_time'];
			//$result['end_time'][$i] = $row['end_time'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			//$result[''][$i] = $row[];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	function get_distinct_time($week_day,$location)
	{
		$sql = sprintf("select 
				distinct(lu.start_time),
				lu.end_time
				from look_up lu
				where week_day = %d and lu.location = '%s' order by lu.start_time",$week_day,$location);
				
		//echo $sql;		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			//$result['lesson_type'][$i] = $row['lesson_type'];
			//$result['lesson_name'][$i] = $row['lesson_name'];
			$result['max_member'][$i] = $row['max_member'];
			$result['available_member'][$i] = $row['available_member'];
			//$result[''][$i] = $row[''];
			//$result[''][$i] = $row[''];
			
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function get_distinct_location($week_day)
	{
		$sql = "select 
				distinct(lu.location_name),
				lu.location
				from look_up lu
				where week_day = $week_day
				";
				
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			//$result['start_time'][$i] = $row['start_time'];
			//$result['end_time'][$i] = $row['end_time'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			//$result[''][$i] = $row[];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function get_day_wise_report($day,$location='',$time=0.0)
	{
		if(strcasecmp($location,''))
		$cond= " and location = '$location' ";
		if(strcasecmp($time,''))
		{
			$cond1 =" and start_time = $time";
		}
		else $cond = "";
		$sql = "select 
				ts.user_id,
				ts.lookup_id,
				user.call_name ,
				user.last_name,
				user.middle_name,
				user.initial,
				user.date_of_birth,
				user.gender,
				lu.lesson_id,
				lu.group_id,
				lu.start_time,
				lu.end_time,
				lu.week_day,
				lu.max_member,
				lu.available_member,
				ld.age_group,
				ld.duration_per_lesson as duration,
				ld.num_lesson,
				ld.lesson_type,
				lu.location,
				lu.location_name,
				ld.name as lesson_name
				from look_up lu, lesson_detail ld, temp_schedule ts,user 
				where ts.lookup_id  = lu.id and lu.lesson_id = ld.id  and user.id = ts.user_id and  lu.week_day = $day  $cond
				$cond1
				";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lookup_id'][$i] = $row['lookup_id'];
			$result['call_name'][$i] = $row['call_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['birth_date'][$i] = $row['date_of_birth'];
			$result['gender'][$i] = $row['gender'];
			$result['user_id'][$i] = $row['user_id'];
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['location_name'][$i] = $row['location_name'];
			$result['location'][$i] = $row['location'];
			$result['abbreviation'][$i] = $row['abbreviation'];
			$result['week_day'][$i] = $row['week_day'];
			$result['max_member'][$i] = $row['max_member'];
			$result['available_member'][$i] = $row['available_member'];
			$result['age_group'][$i] = $row['age_group'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['duration'][$i] = $row['duration'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	
	function get_location_wise_report($location,$start_time =0.0,$day = 1)
	{
		
		$sql = "select 
				ts.user_id,
				user.call_name ,
				user.last_name,
				user.middle_name,
				user.initial,
				user.date_of_birth,
				user.gender,
				lu.lesson_id,
				lu.group_id,
				lu.start_time,
				lu.end_time,
				lu.week_day,
				lu.max_member,
				lu.available_member,
				ld.age_group,
				ld.duration_per_lesson as duration,
				ld.num_lesson,
				ld.lesson_type,
				lu.location,
				lu.location_name,
				ld.name as lesson_name
				from look_up lu, lesson_detail ld, temp_schedule ts,user 
				where ts.lookup_id  = lu.id and lu.lesson_id = ld.id  and user.id = ts.user_id and  lu.location = '$location' and start_time = $start_time  and week_day = $day
				
				";
				
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['call_name'][$i] = $row['call_name'];
			$result['initial'][$i] = $row['initial'];
			$result['last_name'][$i] = $row['last_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['birth_date'][$i] = $row['date_of_birth'];
			$result['gender'][$i] = $row['gender'];
			$result['user_id'][$i] = $row['user_id'];
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['location_name'][$i] = $row['location_name'];
			$result['location'][$i] = $row['location'];
			$result['abbreviation'][$i] = $row['abbreviation'];
			$result['week_day'][$i] = $row['week_day'];
			$result['max_member'][$i] = $row['max_member'];
			$result['available_member'][$i] = $row['available_member'];
			$result['age_group'][$i] = $row['age_group'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['duration'][$i] = $row['duration'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}
	function get_scheduled_student($param,$value='')
{
	$sql = "";
	if($param==1) //if all selected
	{
		$sql = "select 
				u.id,
				u.call_name,
				u.initial,
				u.middle_name,
				u.last_name,
				l.week_day,
				l.start_time,
				l.end_time,
				l.max_member,
				l.available_member,
				l.location,
				l.location_name,
				ld.lesson_type,
				ld.name as lesson_name,
				a.email,
				a.telefoon_vast as telephone,
				a.telefoon_mobiel as mobile
				from temp_schedule ts, look_up l,user u,address a, lesson_detail ld
				where ts.lookup_id = l.id and u.id = ts.user_id and ld.id = l.lesson_id and a.user_id = u.id order by l.week_day,l.start_time";
	}
	else if($param ==2)
	{
		$sql = "select 
				u.id,
				u.call_name,
				l.week_day,
				u.initial,
				u.middle_name,
				u.last_name,
				l.start_time,
				l.end_time,
				l.max_member,
				l.available_member,
				l.location,
				l.location_name,
				ld.lesson_type,
				ld.name as lesson_name,
				a.email,
				a.telefoon_vast as telephone,
				a.telefoon_mobiel as mobile
				from temp_schedule ts, look_up l,user u,address a, lesson_detail ld
				where ts.lookup_id = l.id and u.id = ts.user_id and ld.id = l.lesson_id and a.user_id = u.id and  l.week_day = $value order by l.start_time";
					
	}
	$i =0;
	$ret = $this->db->process_query($sql);
	$result = array();
	while($row = mysql_fetch_array($ret))
	{
		$result['user_id'][$i] = $row['id'];
		$result['call_name'][$i] = $row['call_name'];
		$result['initial'][$i] = $row['initial'];
		$result['middle_name'][$i] = $row['middle_name'];
		$result['last_name'][$i] = $row['last_name'];
		$result['email'][$i] = $row['email'];
		$result['telephone'][$i] = $row['telephone'];
		$result['mobile'][$i] = $row['mobile'];
		$result['week_day'][$i] = $row['week_day'];
		$result['start_time'][$i] = $row['start_time'];
		$result['end_time'][$i] = $row['end_time'];
		$result['max_member'][$i] = $row['max_member'];
		$result['available_member'][$i] = $row['available_member'];
		$result['location'][$i] = $row['location'];
		$result['location_name'][$i] = $row['location_name'];
		$result['lesson_type'][$i] = $row['lesson_type'];
		$result['lesson_name'][$i] = $row['lesson_name'];
		$i++;
	}
	
	
	return $result;	
}//end of function
	
}

//$a = new RscheduleReport();
//print_r($a->get_day_wise_report(1));
///echo "<br/>";
//echo "<br/>";
//print_r($a->get_location_wise_report('LES4'));
?>