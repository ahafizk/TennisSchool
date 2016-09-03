<?php
require_once('../../db/Database.php');
class Ruser_time_pref
{
	private $db;
	function Ruser_time_pref()
	{
		$this->db = new Database();
	}
	function insert_user_time_pref($user_id, $week_day,$day_time)
	{
		
		$sql = sprintf("INSERT INTO user_time_pref(user_id,week_day,day_time) VALUES (%d,%d,'$day_time')",$user_id,$week_day,$group_id);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
	function get_times($weekDay)
	{
		$sql = "select 
				distinct(start_time) as start_time,
				end_time,
				ld.duration_per_lesson as duration
				from lesson_times lt,lesson_detail ld,group_info g 
				where week_day = $weekDay and g.lesson_detail_id=ld.id and 
				g.id = lt.group_info_id and 
				lt.group_info_lesson_detail_id = ld.id 
				order by start_time";
		$ret = $this->db->process_query($sql);
		$result = array();
		$i=0;
		$link = $this->db->connect();
			
			$i=0;
			while($row = mysql_fetch_array($ret))
			{
				$result['start_time'][$i] = $row['start_time'];
				$result['duration'][$i] = $row['duration'];
				$result['end_time'][$i]=$row['end_time'];
				$i++;
				
			}
			//print_r($ret);
			$this->db->disconnect($link);
			return $result;	
	}
	
}
?>