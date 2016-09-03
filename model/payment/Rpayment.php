<?php 
require_once('../../db/Database.php');
class Rpayment
{
	private $db ;
	function Rpayment()
	{
		$this->db = new Database();
	}
	//insert into user table
	function insert_payment($user_id,$country,$language,$currency, $amount,$description)
	{
		$link = $this->db->connect();
		$description = mysql_real_escape_string($description);
		$this->db->disconnect($link);
		$sql = sprintf("insert into user_payment(user_id,country,language,currency,amount,description,pay_date) values ($user_id,'$country','$language','$currency','$amount','$description',date('Y-m-d'))");
		//echo $sql;
		$ret = $this->db->process_query($sql);
		return $ret;
	} //end of function insert_user
	
		/// search student code
}//end of class
?>