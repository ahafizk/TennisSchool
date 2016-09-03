<?php 
require_once('../../db/Database.php');
class Ruser
{
	private $db ;
	function Ruser()
	{
		$this->db = new Database();
	}
	
	function insert_user($title,$first_name,$last_name, $nick_name,$gender,$user_name,$password,$start_time,$end_time,$date)
	{
		$link = $this->db->connect();
		$title = mysql_real_escape_string($title);
		$first_name = mysql_real_escape_string($first_name);
		$last_name = mysql_real_escape_string($last_name);
		$nick_name = mysql_real_escape_string($nick_name);
		$gender = mysql_real_escape_string($gender);
		$user_name = mysql_real_escape_string($user_name);
		$password = mysql_real_escape_string($password);
		$start_time = mysql_real_escape_string($start_time);
		$end_time = mysql_real_escape_string($end_time);
		$this->db->disconnect($link);
		$sql = sprintf("INSERT INTO USERS(title,first_name,last_name,nick_name,gender,user_name,password,active,start_time,end_time,date_of_birth) VALUES ('$title','$first_name','$last_name','$nick_name','$gender','$user_name','$password','','$start_time','$end_time','$date')");
		echo $sql;
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_user_id($first_name,$last_name,$user_name,$password)
	{
			$ret = false;
			$sql = sprintf("select id from users where first_name = '%s' and last_name = '%s' and user_name = '%s' and password ='%s'",$first_name,$last_name,$user_name,$password);
			
			$result = $this->db->process_query($sql);
			$link = $this->db->connect();
			while($row = mysql_fetch_row($result))
			{
				$ret = $row[0];
				
			}
			$this->db->disconnect($link);
			return $ret;
	}
	function set_active_user($user_id)
	{
		$sql = sprintf("update users set active = 1 where id = $user_id");	
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_user($user_name,$password)
	{
		$ret = false;
			$sql = sprintf("select id,user_name from users where user_name = '%s' and password ='%s'",$user_name,$password);
			//echo $sql;
			$result = $this->db->process_query($sql);
			$link = $this->db->connect();
			$ret = array();
			while($row = mysql_fetch_array($result))
			{
				$ret[0] = $row['id'];
				$ret[1] = $row['user_name'];
				
			}
			//print_r($ret);
			$this->db->disconnect($link);
			return $ret;	
	}
	function get_user_name($user_name)
	{
		$ret = false;
			$sql = sprintf("select id,user_name from users where user_name = '%s'",$user_name);
			//echo $sql;
			$result = $this->db->process_query($sql);
			$link = $this->db->connect();
			$ret = array();
			while($row = mysql_fetch_array($result))
			{
				
				$ret[0] = $row['user_name'];
				
			}
			//print_r($ret);
			$this->db->disconnect($link);
			return $ret;		
	}
	function get_user_by_id($id)
	{
		$sql = sprintf("select *from users where id=$id");	
		$res = $this->db->process_query($sql);
		$link = $this->db->connect();
		$i= 0;
	 	$result = array();
		while($row = mysql_fetch_array($res))
		{	
			$result['id'][$i] = $row['id'];
		 	$result['first_name'][$i] = $row['first_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['user_name'][$i] = $row['user_name'];
			$result['nick_name'][$i] = $row['nick_name'];
			$result['user_name'][$i] = $row['user_name'];
			$result['start_time'][$i] = $row['start_time'];
			$result['end_time'][$i] = $row['end_time'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$i++;
	    }
		$this->db->disconnect($link);
		
		return $result;
	}
	function get_user_inactive()
	{
		$sql = sprintf("select *from users where active = 0");	
		$res = $this->db->process_query($sql);
		$link = $this->db->connect();
		$i= 0;
	 	$result = array();
		while($row = mysql_fetch_array($res))
		{	
			$result['id'][$i] = $row['id'];
		 	$result['first_name'][$i] = $row['first_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['user_name'][$i] = $row['user_name'];
			$result['nick_name'][$i] = $row['nick_name'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$i++;
	    }
		$this->db->disconnect($link);
		
		return $result;
	}
	function get_total_user_inactive()
	{
		$sql = sprintf("select count(id) as total from users where active = 0");	
		$link = $this->db->connect();
		$res = $this->db->process_query($sql);
		$i= 0;
		$result = 0;
	 	
		$row = mysql_fetch_row($res);
		$result = $row[0];
		$this->db->disconnect($link);
		
		return $result;
	}
	
	function get_user_active()
	{
		$sql = sprintf("select *from users where active != 0");	
		$res = $this->db->process_query($sql);
		$link = $this->db->connect();
		$i= 0;
		while($row = mysql_fetch_array($res))
		{
			$result['id'][$i] = $row['id'];
		 	$result['first_name'][$i] = $row['first_name'];
			$result['last_name'][$i] = $row['last_name'];
			$result['user_name'][$i] = $row['user_name'];
			$result['nick_name'][$i] = $row['nick_name'];
			$result['date_of_birth'][$i] = $row['date_of_birth'];
			$i++;
	    }
		$this->db->disconnect($link);
		
		return $result;
	}
}
?>