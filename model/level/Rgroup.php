<?php
require_once('../../db/Database.php');
class Rgroup
{
	private $db;
	function Rgroup()
	{
		$this->db = new Database();
	}
	
	function get_lessons()
	{
		$sql = "select *from lesson_detail";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['id'][$i] = $row['id'];
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['name'][$i] = $row['name'];
			$result['start_date'][$i] = $row['start_date'];
			$result['end_date'][$i] = $row['end_date'];
			$result['duration_per_lesson'][$i] = $row['duration_per_lesson'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['age_group'][$i] = $row['age_group'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}//end of function
	
	function get_lesson_by_id($lesson_id)
	{
		$sql = "select *from lesson_detail where id = $lesson_id";
		//echo $sql;
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['name'][$i] = $row['name'];
			$result['lesson_name'][$i] =  $row['name'];
			$result['start_date'][$i] = $row['start_date'];
			$result['end_date'][$i] = $row['end_date'];
			$result['duration_per_lesson'][$i] = $row['duration_per_lesson'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['duration'][$i] = $row['duration_per_lesson'];
			$result['description'][$i] = $row['detail_description'];
			$result['age_group'][$i] = $row['age_group'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;	
	}//end of function
	
	function insert_group($table,$coloums)
	{
		$ret = $this->db->insert($table,$coloums);
		return $ret;
	}
	function get_group_id($lesson_id,$max_mem,$trainer,$job_num)
	{
		$sql = sprintf("select id from group_info where lesson_detail_id=%d and max_group_member = %d and number_trainer = %d and number_job = %d",$lesson_id,$max_mem,$trainer,$job_num);
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result =  $row['id'];
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_group_information()
	{
		$sql = "select 
				ld.id as lesson_id,
				g.id as group_id,
				ld.lesson_type,
				ld.name as lesson_name,
				g.max_group_member as max_member,
				lt.week_day,
				lt.start_time,
				lt.end_time
				from lesson_detail ld,group_info g,lesson_times lt
				where ld.id = g.lesson_detail_id and g.lesson_detail_id = lt.group_info_lesson_detail_id and g.id = lt.group_info_id
				order by ld.lesson_type asc";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		//echo $sql;
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['lesson_name'][$i] =  $row['lesson_name'];
			$result['max_member'][$i] =  $row['max_member'];
			$result['week_day'][$i] =  $row['week_day'];
			$result['start_time'][$i] =  $row['start_time'];
			$result['end_time'][$i] =  $row['end_time'];
			//$result[''][$i] =  $row[''];
			$result['lesson_id'][$i] =  $row['lesson_id'];
			$result['group_id'][$i] =  $row['group_id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_availablemember($group_id,$lesson_id)
	{
		
		$sql = sprintf("select available_member from look_up where group_id = %d and lesson_id = %d order by available_member desc",$group_id,$lesson_id);
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			//print_r($row);
			$result = $row['available_member'];
			break;
		}
	
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_lesson_information()
	{
		$sql ="select *from lesson_detail ld , lesson_week lw where lw.lesson_id = ld.id";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		//echo $sql;
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['name'][$i] =  $row['name'];
			$result['start_date'][$i] =  $row['start_date'];
			$result['end_date'][$i] =  $row['end_date'];
			$result['num_lesson'][$i] =  $row['num_lesson'];
			$result['duration_per_lesson'][$i] =  $row['duration_per_lesson'];
			$result['age_group'][$i] =  $row['age_group'];
			$result['lesson_id'][$i] =  $row['id'];
			//$result[''][$i] =  $row[''];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_groups()
	{
		$sql ="select distinct(g.id) as group_id,ld.id as lesson_id, lesson_type,name from group_info g, lesson_detail ld where g.lesson_detail_id = ld.id ";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['lesson_name'][$i] = $row['name'];
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	/*function get_lesson_by_id($id)
	{
		$sql = "select *from lesson_detail where id = $id";	
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] =  $row['lesson_type'];
			$result['lesson_name'][$i] =  $row['name'];
			$result['start_date'][$i] =  $row['start_date'];
			$result['end_date'][$i] =  $row['end_date'];
			$result['description'][$i] =  $row['detail_description'];
			$result['num_lesson'][$i] =  $row['num_lesson'];
			$result['intented_skill'][$i] =  $row['intented_skill'];
			$result['comments'][$i] =  $row['comments'];
			$result['duration'][$i] =  $row['duration_per_lesson'];
			$result['age_group'][$i] = $row['age_group'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}*/
	function get_group_by_id($id)
	{
		$sql = "select *from group_info where id = $id";	
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['max_member'][$i] =  $row['max_group_member'];
			$result['number_trainer'][$i] = $row['number_trainer'];
			$result['explanation'][$i] = $row['explanation'];
			$result['number_job'][$i] = $row['number_job'];
			//$result[''][$i] = $row[''];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_lesson_times_by_id($group_id, $lesson_id)
	{
		$sql = "select *from lesson_times where group_info_id = $group_id and group_info_lesson_detail_id = $lesson_id";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['start_time'][$i] =  $row['start_time'];
			$result['end_time'][$i] =  $row['end_time'];
			$result['location'][$i] =  $row['location'];
			$result['location_name'][$i] =  $row['name'];
			$result['abbreviation'][$i] =  $row['abbreviation'];
			
			$result['week_day'][$i] =  $row['week_day'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_lesson_finance($group_id,$lesson_id)
	{
		$sql = "select *from lesson_finance where group_id = $group_id and lesson_id = $lesson_id";
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['tution_fees'][$i] =  $row['tution_fees'];
			$result['tution_fee_collection'][$i] =  $row['tution_fee_collection'];
			$result['payment_unit'][$i] =  $row['payment_unit'];
			$result['pay_for'][$i] =  $row['pay_for'];
			$result['collection_date'][$i] =  $row['collection_date'];
			$result['vat'][$i] = $row['vat'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	
}//end of class
?>