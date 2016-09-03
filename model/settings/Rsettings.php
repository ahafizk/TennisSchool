<?php
require_once('../../db/Database.php');
class Rsettings
{
	private $db;
	function Rsettings()
	{
		$this->db = new Database();
	}
	function insert_announcement($table,$coloums)
	{
		$ret = $this->db->insert($table,$coloums);
		return $ret;
	}
	function update_announcement($table_name,$coloums,$condition)
	{
		$ret = $this->db->update($table_name,$coloums,$condition);
		return $ret;	
	}
	function delete_announcement($id)
	{
		$sql = "delete from adminuser where id = $user_id";
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_emails()
	{
		$sql ="select * from address";	
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['email'][$i] = $row['email'];
			
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_announcement()
	{
		$sql = "select *from announcement";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['body'][$i] = $row['body'];
			$result['subject'][$i] = $row['subject'];
			$result['date'][$i] = $row['created_on'];
			$result['id'][$i] = $row['id'];
			$result['signature'] = $row['signature'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
	function get_announcement_id($id)
	{
		$sql = "select *from announcement where id = $id";
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['body'][$i] = $row['body'];
			$result['subject'][$i] = $row['subject'];
			$result['date'][$i] = $row['created_on'];
			$result['id'][$i] = $row['id'];
			$result['signature'] = $row['signature'];
			$i++;
		}
		$this->db->disconnect($link);
		return $result;
	}
}
?>