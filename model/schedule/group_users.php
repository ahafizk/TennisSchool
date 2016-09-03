<?php
require_once('../../db/Database.php');
class Group_users
{
	private $db;
	function Group_users()
	{
		$this->db = new Database();
	}
	function get_users_by_group($lesson_type,$member)
	{	
		$sql = "select u.id as user_id,u.call_name,u.middle_name,u.last_name,u.date_of_birth, lp.lesson_id,ld.name as lesson_name,ld.lesson_type ,ld.num_lesson, ld.age_group,lp.preference from user u , user_lesson_pref lp,lesson_detail ld,group_info gi where u.id = lp.user_id and lp.lesson_id = ld.id and ld.id = gi.lesson_detail_id and ld.lesson_type = '$lesson_type'and gi.max_group_member = $member order by u.id";
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			
			$result['last_name'][$i] = $row['last_name'];
			$result['call_name'][$i] = $row['call_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['age_group'][$i] = $row['age_group'];
			$result['user_id'][$i] = $row['user_id'];
			$result['person'][$i] = $row['person'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['preference'][$i] = $row['preference'];
			
			
			
			$i++;	
		}
		//print_r($result);
			//print_r($ret);
			$this->db->disconnect($link);
		return $result;	
	}
}

?>