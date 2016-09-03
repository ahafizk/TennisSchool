<?php
require_once('../../db/Database.php');
class Rlesson_detail
{
	private $db;
	function Rlesson_detail()
	{
		$this->db = new Database();
	}
	//this is unckecked function
	function insert_lesson_details($lesson_type, $start_date, $end_date,$detail_description, $num_lesson, $duration_per_lesson,$number_job,$frequency,$student_per_group,$intented_skill,$remarks,$tution_fees,$remain_tution,$tution_fees_collection)
	{
		
		$sql = sprintf("INSERT INTO lesson_detail(lesson_type,start_date,end_date,num_lesson,duration_per_lesson,number_job,frequency,student_per_group,intented_skill,remarks) VALUES ('%s','%s','%s','%s',%d,%d,%d,'%s',%d,'%s','%s',$tution_fees,$remain_tution,$tution_fees_collection)",$lesson_type, $start_date,$end_date,$detail_description,$num_lesson,$duration_per_lesson,$number_job,$frequency,$student_per_group,$intented_skill,$remarks);
		//echo $sql;
		
		$ret = $this->db->process_query($sql);
		return $ret;
	}
	//************//
	
	function get_lesson_details()
	{
		$sql = sprintf("select *from lesson_detail");	
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['id'][$i] = $row['id'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['start_date'][$i] = $row['start_date'];
			$result['end_date'][$i] = $row['end_date'];
			$result['audience'][$i] = $row['audience'];
			$result['detail_description'][$i] = $row['detail_description'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['remain_lesson'][$i] = $row['remain_lesson'];
			$result['duration_per_lesson'][$i] = $row['duration_per_lesson'];
			$result['number_job'][$i] = $row['number_job'];
			$result['frequency'][$i] = $row['frequency'];
			$result['student_per_group'][$i] = $row['student_per_group'];
			$result['number_trainer'][$i] = $row['number_trainer'];
			$result['intented_skill'][$i] = $row['intented_skill'];
			$result['remarks'][$i] = $row['remarks'];
			$result['tution_fees'][$i] = $row['tution_fees'];
			$result['remain_tution'][$i] = $row['remain_tution'];
			$result['tution_fees_collection'][$i] = $row['tution_fees_collection'];
			$i++;
			
				
		}
		//print_r($ret);
		$this->db->disconnect($link);
		return $result;
	}
	function get_lesson_detail_group()
	{
		$sql = "select gi.id as group_id,ld.lesson_type,ld.name as lesson_name,ld.id as lesson_id ,ld.num_lesson, ld.duration_per_lesson,gi.max_group_member,lf.tution_fees, lf.tution_fee_collection  from lesson_detail ld, group_info gi, lesson_finance lf where ld.id = gi.lesson_detail_id and lf.group_id = gi.id";
		
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['group_id'][$i] = $row['group_id'];
			$result['lesson_id'][$i] = $row['lesson_id'];
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['duration'][$i] = $row['duration_per_lesson'];
			$result['max_member'][$i] = $row['max_group_member'];
			$result['tution_fees'][$i] = $row['tution_fees'];
			$result['tution_fee_collection'][$i] = $row['tution_fee_collection'];
			$result['remain_lesson'][$i] = $row['remain_lesson'];
			$result['duration'][$i] = $row['duration_per_lesson'];
		
			$i++;
			
				
		}
		
		$this->db->disconnect($link);
		return $result;
	}
	
	function get_lesson()
	{
		$sql = "select lesson_type,name,age_group,num_lesson,gi.max_group_member from lesson_detail ld,group_info gi where ld.id=gi.lesson_detail_id";	
		$ret = $this->db->process_query($sql);
		
		$link = $this->db->connect();
		$result = array();
		$i =0;
		while($row = mysql_fetch_array($ret))
		{
			$result['lesson_type'][$i] = $row['lesson_type'];
			$result['name'][$i] =  $row['name'];
			$result['age_group'][$i] = $row['age_group'];
			$result['num_lesson'][$i] = $row['num_lesson'];
			$result['member'][$i] = $row['max_group_member'];
			$i++;
		}
		
		$this->db->disconnect($link);
		return $result;
		
	}
	
}

//print_r($b);
?>