<?php
//require_once('../../db/Database.php');
require_once('../../db/Database.php');
class Rinvoice
{
	private $db;
	function Rinvoice()
	{
		$this->db = new Database();
	}//end of constructor
	
	function get_info($user_id)//ret invoice informations
	{
	   $sql = "select 
	   			u.initial,
				u.call_name,
				u.last_name,
				u.middle_name,
				a.street,
				a.house_number,
				a.home_plate,
				a.post_code,
				a.email,
				g.id as group_num,
				a.telefoon_vast,
				a.telefoon_mobiel,
				ld.lesson_type,
				ld.name as lesson_name,
				ld.start_date,
				ld.end_date,
				ld.num_lesson,
				ld.duration_per_lesson,
				l.location,
				l.location_name,
				l.start_time,
				l.end_time,
				l.week_day,
				l.max_member,
				fi.vat,
				fi.tution_fees
				from look_up l,user u, address a, temp_schedule ts,lesson_detail ld , group_info g,lesson_finance fi 
				where 
				u.id = ts.user_id and u.id = a.user_id and l.group_id = g.id and l.lesson_id = ld.id and
				fi.lesson_id = l.lesson_id and fi.group_id = l.group_id and l.lesson_id = ld.id and g.id = fi.group_id and
				ts.lookup_id = l.id and u.id = $user_id";
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			
			$result['initial'][$i] = $row['initial'];
			$result['first_name'][$i] = $row['call_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['street'][$i] = $row['street'];
			$result['house_number'][$i] = $row['house_number'];
			$result['home_plate'][$i] = $row['home_plate'];
			$result['post_code'][$i] = $row['post_code'];
			$result['email'][$i] = $row['email'];
			$result['telephone'][$i] = $row['telefoon_vast'];
			$result['mobile'][$i] = $row['telefoon_mobiel'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['lesson_name'][$i] = $row['lesson_name'];
			$result['start_date'][$i] = $row['start_date'];
			$result['end_date'][$i] = $row['end_date'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['week_day'][$i] = $row['week_day'];
			$result['location'][$i] = $row['location'];
			$result['location_name'][$i] = $row['location_name'];
			$result['tution_fees'][$i] = $row['tution_fees'];
			$result['vat'][$i] = $row['vat'];
			$result['group_num'][$i] = $row['group_num'];
			$result['week_day'][$i] = $row['week_day'];
			$result['max_member'][$i] =$row['max_member'];
			$i++;	
		}
		//print_r($result);
			//print_r($ret);
		$this->db->disconnect($link);
		return $result;	
	}
}

?>