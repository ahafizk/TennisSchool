<?php
require_once('../../db/Database.php');
class Rschedule
{
	private $db;
	function Rschedule()
	{
		$this->db = new Database();
	}
	function insert_week($years, $week,$start_date,$end_date,$les_vij,$group_id)
	{
		$link = $this->db->connect();
		$years = mysql_real_escape_string($years);
		$week = mysql_real_escape_string($week);
		$start_date = mysql_real_escape_string($start_date);
		$end_date = mysql_real_escape_string($end_date);
		$les_vij = mysql_real_escape_string($les_vij);
		$group_id = mysql_real_escape_string($group_id);
		$this->db->disconnect($link);
		
		$sql = sprintf("INSERT INTO week_schedule(years,week,start_date,end_date,les_vij,group_id) VALUES ('%s','%s','%s','%s','%s',%d)",$years,$week,$start_date,$end_date,$les_vij,$group_id);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	function get_week_id($years, $week,$start_date,$end_date,$les_vij,$group_id) // return the week_id
	{
		$sql = sprintf("select id from week_schedule where years ='$years' and week ='$week' and start_date = '$start_date' and end_date = '$end_date' and les_vij = '$les_vij' and group_id =$group_id");
		//echo $sql;
		$ret = $this->db->process_query($sql);
		$link = $this->db->connect();
		$row = mysql_fetch_array($ret);
		//print_r($row);
		$result = $row['id'];
		$this->db->disconnect($link);
		return $result;
	}
	
	function insert_day_time($week_day, $start_time,$end_time,$location,$name,$abbreviation,$group_id,$week_id)
	{
		$link = $this->db->connect();
		$week_day = mysql_real_escape_string($week_day);
		$start_time = mysql_real_escape_string($start_time);
		$end_time = mysql_real_escape_string($end_time);
		$location = mysql_real_escape_string($location);
		$name = mysql_real_escape_string($name);
		$abbreviation = mysql_real_escape_string($abbreviation);
		$week_id = mysql_real_escape_string($week_id);
		$group_id = mysql_real_escape_string($group_id);
		$this->db->disconnect($link);
		
		$sql = sprintf("INSERT INTO day_time(week_day,start_time,end_time,location,name,abbreviation,group_id,week_id) VALUES ('%s','%s','%s','%s','%s','%s',%d,%d)",$week_day,$start_time,$end_time,$location,$name,$abbreviation,$group_id,$week_id);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
}
?>