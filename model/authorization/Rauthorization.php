<?php
require_once('../../db/Database.php');
class Rauthorization
{
	private $db;
	function Rauthorization()
	{
		$this->db = new Database();
	}
	
	function insert_user($table,$coloums)
	{
		$ret = $this->db->insert($table,$coloums);
		return $ret;
	}
	function get_user_name($user_name)
	{
		$sql = "select id from adminuser where user_name = '$user_name'";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = 0;
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result = $row['id'];
			break;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_all_user_name()
	{
		$sql = "select id,user_name from adminuser ";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_name'][$i] = $row['user_name'];
			$result['id'][$i] = $row['id'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_user_by_id($user_id)
	{
		$sql = "select *from adminuser where id = $user_id";	
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_name'][$i] = $row['user_name'];
			$result['id'][$i] = $row['id'];
			$result['initial'][$i] = $row['initial'];
			$result['call_name'][$i] = $row['call_name'];
			$result['middle_name'][$i] = $row['middle_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['street'][$i] = $row['street'];
			$result['house_number'][$i] = $row['house_number'];
			$result['location'][$i] = $row['location'];
			$result['password'][$i] = $row['password'];
			$result['birth_date'][$i] = $row['birth_date'];
			$result['gender'][$i] = $row['gender'];
			$result['post_code'][$i] = $row['post_code'];
			$result['phone'][$i] = $row['phone'];
			$result['mobile'][$i] = $row['mobile'];
			$result['email'][$i] = $row['email'];
			$result['fax'][$i] = $row['fax'];
			
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function update_user($table_name,$coloums,$condition)
	{
		$ret = $this->db->update($table_name,$coloums,$condition);
		return $ret;	
	}
	function delete_user($user_id)
	{
		$sql = "delete from adminuser where id = $user_id";
		$ret = $this->db->process_query($sql);
		return $ret;
	}
}
?>