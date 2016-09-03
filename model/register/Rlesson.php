<?php
require_once('../../db/Database.php');
class Rlesson
{
	private $db ;
	function Rlesson()
	{
		$this->db = new Database();
	}
	
	function insert_lesson($type_name,$name,$description,$number_class,$num_free_class,$duration)
	{
		$link = $this->db->connect();
		$id_association = mysql_real_escape_string($type_name);
		$tb_bonds_nummer = mysql_real_escape_string($name);
		$skill_single = mysql_real_escape_string($description);
		$skill_double = mysql_real_escape_string($number_class);
		$level = mysql_real_escape_string($num_free_class);
		$diploma_certificate = mysql_real_escape_string($duration);
		$this->db->disconnect($link);
		
		$sql = sprintf("INSERT INTO lesson(type_name,name,description,number_class,num_free_class,duration) VALUES ('%s','%s','%s',%d,%d,%d)",$type_name,$name,$description,$number_class,$num_free_class,$duration);
		
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_lesson_id_name()
	{
		$sql = sprintf("SELECT DISTINCT(NAME) as name , LESSON_ID as id FROM LESSON");
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$i =0;
 		$lesson = array();
 		while ($row = mysql_fetch_array($ret)) 
 		{
			//print_r( $row);
 			$lesson[$i]['name'] = $row['name'];
			$lesson[$i]['id'] = $row['id'];
			$i++;
        }
		$this->db->disconnect($link);
		return $lesson;
	}
}
?>