<?php
require_once('../../db/Database.php');
class Ruser_agreement
{
	private $db;
	function Ruser_agreement()
	{
		$this->db = new Database();
	}
	function insert_agreement($user_id, $provision_accept,$email_accept,$debit_collection,$bank_acc_no,$location,$other_name,$email,$street,$house_num,$post_code,$other_location,$note)
	{
		$link = $this->db->connect();
		$provision_accept = mysql_real_escape_string( $provision_accept);
		$email_accept= mysql_real_escape_string($email_accept);
		$debit_collection = mysql_real_escape_string($debit_collection);
		$bank_acc_no = mysql_real_escape_string($bank_acc_no);
		$location = mysql_real_escape_string($location);
		$other_name  = mysql_real_escape_string($other_name);
		$email   = mysql_real_escape_string($email);
		$street   = mysql_real_escape_string($street);
		$house_num	 = mysql_real_escape_string($house_num);
		$post_code	  = mysql_real_escape_string($post_code);
		$other_location	   = mysql_real_escape_string($other_location);
		$note	    = mysql_real_escape_string($note);
		$this->db->disconnect($link);
		
		$sql = sprintf("INSERT INTO agreement(user_id, provision_accept,email_accept,debit_collection,bank_acc_no,location,other_name,email,street,house_num,post_code,other_location,note) VALUES (%d,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$user_id, $provision_accept,$email_accept,$debit_collection,$bank_acc_no,$location,$other_name,$email,$street,$house_num,$post_code,$other_location,$note);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
}
?>