<?php 
require_once('../../common/forwarding.php');
session_start();
if(isset($_POST['next'])&& !strcasecmp($_POST['next'],'Next'))
{
	$_SESSION['lesson_type'] = $_POST['lesson_type'];
	$_SESSION['lesson_name'] = $_POST['lesson_name'];
	$_SESSION['description'] = $_POST['description'];
	$_SESSION['start_date'] = $_POST['start_date'];
	$_SESSION['end_date'] = $_POST['end_date'];
	$_SESSION['age_group'] = $_POST['age_group'];
	$_SESSION['total_lesson'] = $_POST['total_lesson'];
	$_SESSION['frequency'] = $_POST['frequency'];
	$_SESSION['intented_skill'] = $_POST['intented_skill'];
	$_SESSION['duration'] = $_POST['duration'];
	$_SESSION['comment'] = $_POST['comment'];
	//echo $_POST['lesson_type'];
	if(!strcasecmp($_SESSION['lesson_type'],'')|| !strcasecmp($_SESSION['duration'],'') || !strcasecmp($_SESSION['lesson_name'],''))
	{
		forward('lesson1.php?h');
	}
	if(!is_numeric($_SESSION['total_lesson']))
	{
		$_SESSION['total_lesson'] = "";
		forward('lesson1.php?f');
	}
	if(!is_numeric($_SESSION['duration']))
	{
		
		$_SESSION['duration'] = "";
		forward('lesson1.php?e');
		
	}
	forward('lesson2.php');
}
?>