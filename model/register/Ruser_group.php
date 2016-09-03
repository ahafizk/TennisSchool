<?php
require_once('../../db/Database.php');
class Ruser_group
{
	private $db;
	function Ruser_group()
	{
		$this->db = new Database();
	}
	function insert_user_group($user_id, $group_id)
	{
		
		$sql = sprintf("INSERT INTO user_group(user_id,group_id) VALUES (%d,%d)",$user_id,$group_id);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
}
?>