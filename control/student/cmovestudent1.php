<?php
require_once('../../model/student/Rstudent.php');
require_once('../../common/common.php');
session_start();
$rstudent = new Rstudent();
$record = $rstudent->getLessonTime($_POST['lesson_id']);
$info = $_SESSION['info'];
$user=$_SESSION['user'];
?>