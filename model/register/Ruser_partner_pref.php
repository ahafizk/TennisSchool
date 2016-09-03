<?php
require_once('../../db/Database.php');
class Ruser_partner_pref
{
	private $db;
	function Ruser_partner_pref()
	{
		$this->db = new Database();
	}
	function insert_user_partner_pref($user_id,$desired,$call_name,$middle_name,$last_name,$sex,$birth_date,$street,$house_num,$post_code,$location,$telephone,$mobile,$email,$bond_num,$level_skill)
	{
		$link = $this->db->connect();
		$desired = mysql_real_escape_string($desired);
		$call_name = mysql_real_escape_string($call_name);
		$middle_name = mysql_real_escape_string($middle_name);
		$last_name = mysql_real_escape_string($last_name);
		$sex = mysql_real_escape_string($sex);
		$birth_date = mysql_real_escape_string($birth_date);
		$street = mysql_real_escape_string($street);
		$house_num = mysql_real_escape_string($house_num);
		$post_code = mysql_real_escape_string($post_code);
		$location = mysql_real_escape_string($location);
		$telephone = mysql_real_escape_string($telephone);
		$mobile = mysql_real_escape_string($mobile);
		$email = mysql_real_escape_string($email);
		$bond_num = mysql_real_escape_string($bond_num);
		$level_skill = mysql_real_escape_string($level_skill);
		$this->db->disconnect($link);
		//echo $desired;
		$sql = sprintf("INSERT INTO user_partner_pref(user_id,desired,call_name,middle_name,last_name,sex,birth_date,street,house_num,post_code,location,telephone,mobile,email,bond_num,level_skill) VALUES (%d,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$user_id,$desired,$call_name,$middle_name,$last_name,$sex,$birth_date,$street,$house_num,$post_code,$location,$telephone,$mobile,$email,$bond_num,$level_skill);
		
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
}
?>