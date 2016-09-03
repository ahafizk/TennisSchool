<?php
require_once('../../model/level/Rgroup.php');
$rgroup = new Rgroup();
$lessons = $rgroup->get_lessons();
$cntL = count($lessons['lesson_type']);
session_start();
if(isset($_POST['next'])&&!strcasecmp($_POST['next'],'Next'))
{
	$lesson_id = $_POST['lesson_id'];
	if($lesson_id<=0)$lesson_id = $_SESSION['lesson_id'];
	$ls = $rgroup->get_lesson_by_id($lesson_id);
}
?>