<?php 
require_once('../../db/Database.php');
class Ruser
{
	private $db ;
	function Ruser()
	{
		$this->db = new Database();
	}
	
	function insert_user($initial,$call_name,$middle_name,$last_name, $gender,$date_of_birth,$other_detail,$active = 1)
	{
		$link = $this->db->connect();
		$initial = mysql_real_escape_string($initial);
		$call_name = mysql_real_escape_string($call_name);
		$middle_name = mysql_real_escape_string($middle_name);
		$last_name = mysql_real_escape_string($last_name);
		$gender = mysql_real_escape_string($gender);
		$date_of_birth = mysql_real_escape_string($date_of_birth);
		$end_time = mysql_real_escape_string($end_time);
		$this->db->disconnect($link);
		$sql = sprintf("insert into user(initial,call_name,middle_name,last_name,gender,date_of_birth,other_detail,active) values ('$initial','$call_name','$middle_name','$last_name','$gender','$date_of_birth','$other_detail',$active)");
		//echo $sql;
		$ret = $this->db->process_query($sql);
		return $ret;
	} //end of function insert_user
	function get_user_id($initial,$call_name,$last_name,$gender)
	{
			$ret = false;
			$sql = sprintf("select id from user where initial = '%s' and call_name = '%s' and last_name = '%s' and gender = '%s'",$initial,$call_name,$last_name,$gender);
			//echo $sql;
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