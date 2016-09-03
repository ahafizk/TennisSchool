<?php
require_once('../../db/Database.php');
class Rsport_info
{
	private $db ;
	function Rsport_info()
	{
		$this->db = new Database();
	}
	
	function insert_sport_info($user_id,$id_association, $tb_bonds_nummer,$skill_single,$skill_double,$level,$diploma_certificate,$several_year_had,$num_year_tennis,$num_year_workout,$explanation)
	{
		$link = $this->db->connect();
		
		
		$id_association = mysql_real_escape_string($id_association);
		$tb_bonds_nummer = mysql_real_escape_string($tb_bonds_nummer);
		$skill_single = mysql_real_escape_string($skill_single);
		$skill_double = mysql_real_escape_string($skill_double);
		$level = mysql_real_escape_string($level);
		$diploma_certificate = mysql_real_escape_string($diploma_certificate);
		$several_year_had = mysql_real_escape_string($several_year_had);
		$num_year_tennis = mysql_real_escape_string($num_year_tennis);
		$num_year_workout = mysql_real_escape_string($num_year_workout);
		$explanation = mysql_real_escape_string($explanation);
		$this->db->disconnect($link);
		$sql = sprintf("INSERT INTO user_sport_info VALUES (%d,'%s','%s',%d,%d,'%s','%s','%d',%d,%d,'%s')",$user_id,$id_association,$tb_bonds_nummer,$skill_single,$skill_double,$level,$diploma_certificate,$several_year_had,$num_year_tennis,$num_year_workout,$explanation);
		
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	
}
?>