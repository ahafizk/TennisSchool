<?php
require_once('../../model/schedule/Rschedule.php');
$rschedule = new Rschedule();
$lessons = $rschedule->get_lessons();
$cntL = count($lessons['lesson_type']);
if(isset($_POST['get_les'])&&!strcasecmp($_POST['get_les'],'Get'))
{
	$lesson_id = $_POST['lesson_id'];
	$ls = $rschedule->get_lesson_by_id($lesson_id);
}
else if(isset($_POST['create_group'])&&!strcasecmp($_POST['create_group'],'Create Group'))
{
	$_SESSION['max_member'] = $_POST['max_member'];
	$_SESSION['total_trainer'] = $_POST['total_trainer'];
	$_SESSION['job_num'] = $_POST['job_num'];
	$_SESSION['explanation'] = $_POST['explanation'];
	//$_SESSION[''] = $_POST[''];
}
?>