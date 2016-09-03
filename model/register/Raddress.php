<?php
require_once('../../db/Database.php');
class Raddress
{
	private $db ;
	function Raddress()
	{
		$this->db = new Database();
	}
	
	function insert_address($user_id,$street, $house_number,$home_plate,$post_code,$telefoon_vast,$telefoon_mobiel,$email,$fax)
	{
		$link = $this->db->connect();
		
		
		$street = mysql_real_escape_string($street);
		$house_number = mysql_real_escape_string($house_number);
		$home_plate = mysql_real_escape_string($home_plate);
		$post_code = mysql_real_escape_string($post_code);
		$telefoon_vast = mysql_real_escape_string($telefoon_vasts);
		$telefoon_mobiel = mysql_real_escape_string($telefoon_mobiel);
		$this->db->disconnect($link);
		$sql = sprintf("INSERT INTO address VALUES (%d,'%s','%s','%s','%s','%s','%s','%s','%s')",$user_id,$street,$house_number,$home_plate,$post_code,$telefoon_vast,$telefoon_mobiel,$email,$fax);
		//echo $sql;
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
	function get_address_by_id($id)
	{
		$sql = sprintf("select *from address where user_id= $id");	
		$res = $this->db->process_query($sql);
		$link = $this->db->connect();
		$i= 0;
		while($row = mysql_fetch_array($res))
		{
			$result['user_id'][$i] = $row['user_id'];
		 	$result['street'][$i] = $row['street'];
			$result['house_number'][$i] = $row['house_number'];
			$result['home_plate'][$i] = $row['home_plate'];
			$result['post_code'][$i] = $row['post_code'];
			$result['telefoon_vast'][$i] = $row['telefoon_vast'];
			$result['telefoon_mobiel'][$i] = $row['telefoon_mobiel'];
			$result['email'][$i] = $row['email'];
			$result['fax'][$i] = $row['fax'];
			$i++;
	    }
		$this->db->disconnect($link);
		
		return $result;	
	}
	
	
	
}
?>