<?php
require_once('../../db/Database.php');
class Rgroups
{
	private $db ;
	function Rgroups()
	{
		$this->db = new Database();
	}
	
	function insert_groups($group_id,$name,$total_member,$available_member,$start_date,$end_date,$user_id,$lesson_id)
	{
		$link = $this->db->connect();
		
		
		$id_association = mysql_real_escape_string($group_id);
		$tb_bonds_nummer = mysql_real_escape_string($name);
		$skill_single = mysql_real_escape_string($total_memeber);
		$skill_double = mysql_real_escape_string($available_member);
		$level = mysql_real_escape_string($start_date);
		$diploma_certificate = mysql_real_escape_string($end_date);
		$several_year_had = mysql_real_escape_string($user_id);
		$num_year_tennis = mysql_real_escape_string($lesson_id);
		$this->db->disconnect($link);
		
		if(!is_numeric($user_id))
		{
			$user_id = "''";	
		}
		if(!is_numeric($lesson_id))
		{
			$lesson_id = "''";	
		}
		if(!is_numeric($total_member))
		{
			$total_member = "''";	
		}
		if(!is_numeric($available_memeber))
		{
			$available_member = "''";	
		}
		
		$sql = sprintf("INSERT INTO groups(group_id,name,total_member,available_member,start_date,end_date,user_id,lesson_id) VALUES ('%s','%s',%d,%d,'%s','%s',%d,%d)",$group_id,$name,$total_member,$available_member,$start_date,$end_date,$user_id,$lesson_id);
		
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_groups()
	{
		
		$ret = false;
			$sql = sprintf("select *from groups where total_member > available_member");
			//echo $sql;
			$result = $this->db->process_query($sql);
			$link = $this->db->connect();
			$ret = array();
			$i=0;
			while($row = mysql_fetch_array($result))
			{
				$ret['id'][$i] = $row['id'];
				$ret['name'][$i] = $row['name'];
				$ret['group_id'][$i] = $row['group_id'];
				$ret['start_date'][$i] = $row['start_date'];
				$ret['end_date'][$i] = $row['end_date'];
				$ret['lesson_id'][$i] = $row['lesson_id'];
				$i++;
			}
			//print_r($ret);
			$this->db->disconnect($link);
			return $ret;		
	}
	
}
?>