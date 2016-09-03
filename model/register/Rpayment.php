<?php
require_once('../../db/Database.php');
class Rpayment
{
	private $db;
	function Rpayment()
	{
		$this->db = new Database();
	}
	function insert_payment($user_id, $payable_tution,$vat,$percent,$paid_by,$paid_for,$payment_unit)
	{
		$link = $this->db->connect();
		$payable_tution = mysql_real_escape_string($payable_tution);
		$paid_tution = mysql_real_escape_string($paid_tution);
		$vat = mysql_real_escape_string($vat);
		$percent = mysql_real_escape_string($percent);
		$paid_by = mysql_real_escape_string($paid_by);
		$paid_for = mysql_real_escape_string($paid_for);
		$payment_unit = mysql_real_escape_string($payment_unit);
		$this->db->disconnect($link);
		
		$sql = sprintf("INSERT INTO payment(user_id,payable_tution,vat,percent,paid_by,paid_for,payment_unit) VALUES (%d,'%d','%s','%d','%d','%s',%d)",$user_id,$payable_tution,$vat,$percent,$paid_by,$paid_for,$payment_unit);
		echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
}
?>