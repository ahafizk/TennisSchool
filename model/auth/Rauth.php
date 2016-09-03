<?php
//require_once('../../db/Database.php');
require_once('../../db/Database.php');
class Rauth
{
	private $db;
	function Rauth()
	{
		$this->db = new Database();
	}//end of constructor
	
	function get_user($user_name,$password)//ret invoice informations
	{
	   $sql = "select       id,
	   			user_name,
				password
				from adminuser
				where user_name = '$user_name' and password = '$password' ";
		
		$ret = $this->db->process_query($sql);
		//print_r($ret);
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['user_id'][$i] = $row['id'];
			$result['user_name'][$i] = $row['user_name'];
			$result['password'][$i] = $row['password'];
			$result['user_type'][$i] = 'admin';
			$i++;	
		}
                if($i==0){ //user is not admin user
                    //search it for student login
                    $sql = "select id, user_name, password from user where user_name='$user_name' and password='$password' ";
                    $ret = $this->db->process_query($sql);
//                    print $sql;
                   $result = array();
                   $i =0;
                    while($row = mysql_fetch_array($ret))
                    {
                            $result['user_id'][$i] = $row['id'];
                            $result['user_name'][$i] = $row['user_name'];
                            $result['password'][$i] = $row['password'];
                            $result['user_type'][$i] = 'user';
                            $i++;	
                    } 
                }
		//print_r($result);
			//print_r($ret);
		$this->db->disconnect($link);
		return $result;	
	}
}

?>