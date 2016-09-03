<?php
require_once('../../db/Database.php');
class Ruser_lesson_pref
{
	private $db;
	function Ruser_lesson_pref()
	{
		$this->db = new Database();
	}
	function insert_user_lesson_pref($user_id, $lesson_id,$preference)
	{
		if(!strcasecmp($preference,''))$preference = 0;
		$sql = sprintf("INSERT INTO user_lesson_pref(user_id,group_id,preference) VALUES (%d,%d,%d)",$user_id,$lesson_id,$preference);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
}
?>